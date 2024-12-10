<?php
session_start();
require 'db_connection.php'; // Database connection file

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user data from the database
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();

// Handle profile update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];

    // Handle profile picture upload
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['profile_picture']['tmp_name'];
        $file_name = $_FILES['profile_picture']['name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Validate file type (allow only images)
        if (in_array($file_ext, ['jpg', 'jpeg', 'png'])) {
            $profile_picture = 'uploads/' . uniqid() . '.' . $file_ext;
            move_uploaded_file($file_tmp, $profile_picture);
        } else {
            $error = "Invalid file type!";
        }
    } else {
        $profile_picture = $user['profile_picture']; // Keep existing picture if none uploaded
    }

    // Update user data in the database
    $stmt = $pdo->prepare("UPDATE users SET use_name = ?, email = ?, bio = ?, profile_picture = ? WHERE id = ?");
    $stmt->execute([$name, $email, $bio, $profile_picture, $user_id]);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/picocss@1.0.0/dist/pico.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?= htmlspecialchars($user['name']) ?>" required>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($user['email']) ?>" required>
            </div>

            <div>
                <label for="bio">Bio</label>
                <textarea name="bio" id="bio"><?= htmlspecialchars($user['bio']) ?></textarea>
            </div>

            <div>
                <label for="profile_picture">Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture">
            </div>

            <div>
                <button type="submit">Save Changes</button>
            </div>
        </form>

        <a href="dashboard.php">Back to Dashboard</a>
    </div>
</body>
</html>
