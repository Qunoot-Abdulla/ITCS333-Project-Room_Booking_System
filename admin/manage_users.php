<?php
require('inc/db_config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <?php require('inc/links.php') ?>
</head>
<body>
<?php require('inc/header.php') ?>
<div class="container-fluid" id="main-content">
        <div class="row">
            <!-- Main content area -->
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <!-- Page heading -->
                <h2 class="mb-4">Manage Users</h2>
                <?php if ($message): ?>
        <p><?= htmlspecialchars($message); ?></p>
    <?php endif; ?>

    <h2>All Users</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']); ?></td>
                    <td><?= htmlspecialchars($user['username']); ?></td>
                    <td><?= htmlspecialchars($user['email']); ?></td>
                    <td><?= htmlspecialchars($user['role']); ?></td>
                    <td>
                        <!-- Edit User -->
                        <form action="manage_users.php" method="POST" style="display:inline-block;">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']); ?>">
                            <input type="text" name="username" value="<?= htmlspecialchars($user['username']); ?>" required>
                            <input type="email" name="email" value="<?= htmlspecialchars($user['email']); ?>" required>
                            <select name="role" required>
                                <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
                                <option value="user" <?= $user['role'] === 'user' ? 'selected' : ''; ?>>User</option>
                            </select>
                            <button type="submit" name="edit_user">Edit</button>
                        </form>

                        <!-- Delete User -->
                        <form action="manage_users.php" method="POST" style="display:inline-block;">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']); ?>">
                            <button type="submit" name="delete_user">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Add New User</h2>
    <form action="manage_users.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <select name="role" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <button type="submit" name="add_user">Add User</button>
    </form>
            </div>
        </div>
    </div>
</div>
<?php require('inc/scripts.php') ?>
</body>
</html>
