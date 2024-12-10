<?php require('inc/db_config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Bookings</title>
    <?php require('inc/links.php'); ?>
</head>
<body>
<?php require('inc/header.php'); ?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <!-- Main content area -->
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <!-- Page heading -->
            <h2 class="mb-4">Room Booking Management</h2>

            <!-- Add Booking Form -->
            <form method="POST" action="booking.php">
                <label for="room_id">Room:</label>
                <select name="room_id" required>
                    <?php
                    $roomsQuery = select("SELECT id, room_name FROM rooms");
                    while ($room = mysqli_fetch_assoc($roomsQuery)) {
                        echo "<option value='{$room['id']}'>{$room['room_name']}</option>";
                    }
                    ?>
                </select>
                <br>

                <label for="user_id">User ID:</label>
                <input type="number" name="user_id" required>
                <br>

                <label for="booking_date">Booking Date:</label>
                <input type="date" name="booking_date" required>
                <br>

                <label for="start_time">Start Time:</label>
                <input type="time" name="start_time" required>
                <br>

                <label for="end_time">End Time:</label>
                <input type="time" name="end_time" required>
                <br>

                <button type="submit" name="add_booking">Add Booking</button>
            </form>

            <?php
            if (isset($_POST['add_booking'])) {
                $data = filteration($_POST);
                $sql = "INSERT INTO room_bookings (room_id, user_id, booking_date, start_time, end_time) 
                        VALUES (?, ?, ?, ?, ?)";
                $values = [$data['room_id'], $data['user_id'], $data['booking_date'], $data['start_time'], $data['end_time']];
                $datatypes = "iisss";

                if (select($sql, $values, $datatypes)) {
                    alert('success', 'Booking added successfully!');
                } else {
                    alert('error', 'Failed to add booking.');
                }
            }
            ?>

            <h2>Room Schedule</h2>
            <table>
                <tr>
                    <th>Room</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>User</th>
                    <th>Actions</th>
                </tr>
                <?php
                $stmt = select(
                    "SELECT rb.id, r.room_name, rb.booking_date, rb.start_time, rb.end_time, u.username
                     FROM room_bookings rb
                     JOIN rooms r ON rb.room_id = r.id
                     JOIN users u ON rb.user_id = u.id"
                );

                while ($booking = mysqli_fetch_assoc($stmt)) {
                    echo "<tr>
                            <td>{$booking['room_name']}</td>
                            <td>{$booking['booking_date']}</td>
                            <td>{$booking['start_time']}</td>
                            <td>{$booking['end_time']}</td>
                            <td>{$booking['username']}</td>
                            <td><a href='?delete_booking={$booking['id']}'>Delete</a></td>
                          </tr>";
                }
                ?>
            </table>

            <?php
            if (isset($_GET['delete_booking'])) {
                $booking_id = filter_var($_GET['delete_booking'], FILTER_SANITIZE_NUMBER_INT);

                $sql = "DELETE FROM room_bookings WHERE id = ?";
                $values = [$booking_id];
                $datatypes = "i";

                if (select($sql, $values, $datatypes)) {
                    alert('success', 'Booking deleted successfully!');
                } else {
                    alert('error', 'Failed to delete booking.');
                }
            }
            ?>

            <nav>
                <ul>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="booking.php">Bookings</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php require('inc/scripts.php'); ?>
</body>
</html>
