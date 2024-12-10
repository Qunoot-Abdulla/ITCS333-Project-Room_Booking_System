<?php
require('inc/db_config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - reporting analytics</title>
    <?php require('inc/links.php') ?>
</head>
<body>
<?php require('inc/header.php') ?>
<div class="container-fluid" id="main-content">
        <div class="row">
            <!-- Main content area -->
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <!-- Page heading -->
                <h2 class="mb-4">Reporting and Analytics</h2>
                <section>
        <h2>Top Booked Rooms</h2>
        <?php if (count($popularRooms) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Room Name</th>
                        <th>Total Bookings</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($popularRooms as $room): ?>
                        <tr>
                            <td><?= htmlspecialchars($room['room_name']); ?></td>
                            <td><?= htmlspecialchars($room['total_bookings']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No data available.</p>
        <?php endif; ?>
    </section>

    <section>
        <h2>Top Users by Bookings</h2>
        <?php if (count($topUsers) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Total Bookings</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($topUsers as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['username']); ?></td>
                            <td><?= htmlspecialchars($user['total_bookings']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No data available.</p>
        <?php endif; ?>
    </section>

    <section>
        <h2>Booking Trends</h2>
        <?php if (count($bookingTrends) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Total Bookings</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookingTrends as $trend): ?>
                        <tr>
                            <td><?= htmlspecialchars($trend['date']); ?></td>
                            <td><?= htmlspecialchars($trend['total_bookings']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No data available.</p>
        <?php endif; ?>
    </section>
            </div>
        </div>
    </div>
</div>
    <?php require('inc/scripts.php') ?>

</body>
</html>


