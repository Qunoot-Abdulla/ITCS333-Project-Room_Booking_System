<?php
require('inc/db_config.php'); // Include the database connection
require('inc/essentials.php'); // Include helper functions

// Handle Add Room functionality
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] == 'add') {
    $data = filteration($_POST);
    $sql = "INSERT INTO rooms (name, capacity, description) VALUES (?, ?, ?)";
    $values = [$data['name'], $data['capacity'], $data['description']];
    $datatypes = "sis"; // String, Integer, String
    if (select($sql, $values, $datatypes)) {
        alert("success", "Room added successfully!");
    } else {
        alert("error", "Failed to add room.");
    }
}

// Handle Edit Room functionality
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] == 'edit') {
    $data = filteration($_POST);
    $sql = "UPDATE rooms SET name = ?, capacity = ?, description = ? WHERE id = ?";
    $values = [$data['name'], $data['capacity'], $data['description'], $data['id']];
    $datatypes = "sisi"; // String, Integer, String, Integer
    if (select($sql, $values, $datatypes)) {
        alert("success", "Room updated successfully!");
    } else {
        alert("error", "Failed to update room.");
    }
}

// Handle Delete Room functionality
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $sql = "DELETE FROM rooms WHERE id = ?";
    $values = [$id];
    $datatypes = "i"; // Integer
    if (select($sql, $values, $datatypes)) {
        alert("success", "Room deleted successfully!");
    } else {
        alert("error", "Failed to delete room.");
    }
}

// Retrieve all rooms for display
$sql = "SELECT * FROM rooms";
$rooms = select($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Room Management</title>
    <?php require('inc/links.php'); // Include Bootstrap or custom CSS ?>
</head>
<body>
<?php require('inc/header.php'); // Include navigation ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <!-- Main content area -->
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <!-- Page heading -->
                <h2 class="mb-4">Room Usage Statistics</h2>
                <div class="container my-5">
    <h2 class="text-center">Room Management</h2>

    <!-- Form to Add or Edit Room -->
    <div class="card p-3 mb-4">
        <h4><?php echo isset($_GET['action']) && $_GET['action'] == 'edit' ? "Edit Room" : "Add Room"; ?></h4>
        <form method="POST" action="rooms.php" class="row g-3">
            <input type="hidden" name="action" value="<?php echo isset($_GET['action']) && $_GET['action'] == 'edit' ? 'edit' : 'add'; ?>">
            <?php if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'edit'): ?>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>">
            <?php endif; ?>

            <div class="col-md-6">
                <label for="name" class="form-label">Room Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="capacity" class="form-label">Capacity</label>
                <input type="number" id="capacity" name="capacity" class="form-control" required>
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">
                    <?php echo isset($_GET['action']) && $_GET['action'] == 'edit' ? "Update Room" : "Add Room"; ?>
                </button>
            </div>
        </form>
    </div>

    <!-- List of Rooms -->
    <h4 class="mb-3">Rooms List</h4>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Room Name</th>
                <th>Capacity</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($rooms && $rooms->num_rows > 0): ?>
                <?php while ($room = $rooms->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($room['name']); ?></td>
                        <td><?php echo htmlspecialchars($room['capacity']); ?></td>
                        <td><?php echo htmlspecialchars($room['description']); ?></td>
                        <td>
                            <a href="rooms.php?action=edit&id=<?php echo $room['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="rooms.php?action=delete&id=<?php echo $room['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this room?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">No rooms available</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
            </div>
        </div>
    </di>
<?php require('inc/scripts.php'); // Include Bootstrap or custom scripts ?>
</body>
</html>
