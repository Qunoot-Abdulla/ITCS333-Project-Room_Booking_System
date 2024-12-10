<?php 
require('inc/essentials.php');
require('inc/db_config.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php'); ?> 
</head>
<body class="bg-light"> 
    <?php require('inc/header.php') ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h3>Dashboard</h3>
                </div>

                <!-- Overview Section -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header">Total Rooms</div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                    // Use $con for MySQLi connection
                                    $room_count_result = mysqli_query($con, "SELECT COUNT(*) FROM rooms");
                                    $room_count = mysqli_fetch_row($room_count_result)[0];
                                    echo $room_count ?: 0;
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header">Total Bookings</div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                    $booking_count = mysqli_query($con, "SELECT COUNT(*) FROM bookings");
                                    if (!$booking_count) {
                                        die('Error: ' . mysqli_error($con));  // Catch any query errors
                                    } else {
                                        $row = mysqli_fetch_array($booking_count);
                                        echo $row[0];  // This will output the total count of bookings
                                    }
                                    
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card text-white bg-info mb-3">
                            <div class="card-header">Total Users</div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                    // Use $con for MySQLi connection
                                    $user_count_result = mysqli_query($con, "SELECT COUNT(*) FROM users");
                                    $user_count = mysqli_fetch_row($user_count_result)[0];
                                    echo $user_count ?: 0;
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>    
</body>
</html>
