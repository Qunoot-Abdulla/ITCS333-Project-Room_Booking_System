<?php require('inc/db_config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Statistics</title>
    <?php require('inc/links.php') ?>

</head>
<body>
<?php require('inc/header.php') ?>

<div class="container-fluid" id="main-content">
        <div class="row">
            <!-- Main content area -->
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <!-- Page heading -->
                <h2 class="mb-4">Room Usage Statistics</h2>
    <h2>Total Bookings Per Room</h2>
    <?php if (count($roomUsageStats) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Room Name</th>
                    <th>Total Bookings</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roomUsageStats as $stat): ?>
                    <tr>
                        <td><?= htmlspecialchars($stat['room_name']); ?></td>
                        <td><?= htmlspecialchars($stat['total_bookings']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No data available.</p>
    <?php endif; ?>

    <h2>Total Bookings Over Time</h2>
    <?php if (count($dailyBookingsStats) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Total Bookings</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dailyBookingsStats as $stat): ?>
                    <tr>
                        <td><?= htmlspecialchars($stat['booking_date']); ?></td>
                        <td><?= htmlspecialchars($stat['total_bookings']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No data available.</p>
    <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<?php
session_start();
require_once '../database_connection.php'; // Adjust the path as per your project structure

// Ensure the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

try {
    // Query: Total bookings per room
    $roomUsageStmt = $pdo->query("
        SELECT rooms.room_name, COUNT(bookings.id) AS total_bookings
        FROM rooms
        LEFT JOIN bookings ON rooms.id = bookings.room_id
        GROUP BY rooms.id
        ORDER BY total_bookings DESC
    ");
    $roomUsageStats = $roomUsageStmt->fetchAll(PDO::FETCH_ASSOC);

    // Query: Total bookings over time (daily)
    $dailyBookingsStmt = $pdo->query("
        SELECT booking_date, COUNT(id) AS total_bookings
        FROM bookings
        GROUP BY booking_date
        ORDER BY booking_date ASC
    ");
    $dailyBookingsStats = $dailyBookingsStmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

    

<?php require('inc/scripts.php') ?>
</body>
</html>