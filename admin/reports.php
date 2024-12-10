<?php require('inc/db_config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Report</title>
    <?php require('inc/links.php') ?>
</head>
<body>
    <?php require('inc/header.php') ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <!-- Main content area -->
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <!-- Page heading -->
                <h2 class="mb-4">Room Usage and Popularity Report</h2>
                
                <h2>Room Usage Statistics</h2>
                <table>
                    <tr>
                        <th>Room Name</th>
                        <th>Total Bookings</th>
                        <th>Hours Used</th>
                    </tr>
                    <?php
                    // Query to get room usage statistics
                    $sql = "SELECT r.room_name, COUNT(rb.id) AS total_bookings,
                            SUM(TIMESTAMPDIFF(HOUR, rb.start_time, rb.end_time)) AS total_hours
                            FROM rooms r
                            LEFT JOIN room_bookings rb ON r.id = rb.room_id
                            GROUP BY r.id
                            ORDER BY total_bookings DESC";
                    $result = mysqli_query($con, $sql);

                    // Display results in the table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>{$row['room_name']}</td>
                                <td>{$row['total_bookings']}</td>
                                <td>{$row['total_hours']} hours</td>
                              </tr>";
                    }
                    ?>
                </table>

                <h2>Most Popular Rooms</h2>
                <ol>
                    <?php
                    // Query to get most popular rooms
                    $sql = "SELECT r.room_name, COUNT(rb.id) AS booking_count
                            FROM rooms r
                            LEFT JOIN room_bookings rb ON r.id = rb.room_id
                            GROUP BY r.id
                            ORDER BY booking_count DESC LIMIT 5";
                    $result = mysqli_query($con, $sql);

                    // Display results in the list
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<li>{$row['room_name']} - {$row['booking_count']} bookings</li>";
                    }
                    ?>
                </ol>

                <h2>Daily Usage Report</h2>
                <table>
                    <tr>
                        <th>Date</th>
                        <th>Total Bookings</th>
                        <th>Hours Used</th>
                    </tr>
                    <?php
                    // Query to get daily usage report
                    $sql = "SELECT rb.booking_date, COUNT(rb.id) AS total_bookings,
                            SUM(TIMESTAMPDIFF(HOUR, rb.start_time, rb.end_time)) AS total_hours
                            FROM room_bookings rb
                            GROUP BY rb.booking_date
                            ORDER BY rb.booking_date DESC";
                    $result = mysqli_query($con, $sql);

                    // Display results in the table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>{$row['booking_date']}</td>
                                <td>{$row['total_bookings']}</td>
                                <td>{$row['total_hours']} hours</td>
                              </tr>";
                    }
                    ?>
                </table>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <canvas id="popularRoomsChart"></canvas>
                <script>
                    const ctx = document.getElementById('popularRoomsChart').getContext('2d');
                    const data = {
                        labels: [<?php
                            // Get room names for chart
                            $sql = "SELECT r.room_name FROM rooms r
                                    LEFT JOIN room_bookings rb ON r.id = rb.room_id
                                    GROUP BY r.id
                                    ORDER BY COUNT(rb.id) DESC LIMIT 5";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "'{$row['room_name']}',";
                            }
                        ?>],
                        datasets: [{
                            label: 'Bookings',
                            data: [<?php
                                // Get booking count for chart
                                $sql = "SELECT COUNT(rb.id) AS booking_count FROM rooms r
                                        LEFT JOIN room_bookings rb ON r.id = rb.room_id
                                        GROUP BY r.id
                                        ORDER BY booking_count DESC LIMIT 5";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "{$row['booking_count']},";
                                }
                            ?>],
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    };
                    const popularRoomsChart = new Chart(ctx, {
                        type: 'bar',
                        data: data,
                        options: {
                            responsive: true,
                            scales: {
                                y: { beginAtZero: true }
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</div>

<?php require('inc/scripts.php') ?>
</body>
</html>
