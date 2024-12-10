<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'roombooking';


$con = new mysqli($host, $user, $password, $dbname);

if (!$con) {
    die('CCanot Connect to Database'.mysqli_error($conn));
}

function filteration($data) {
    foreach($data as $key => $value) {
    $data[$key] = trim($value);
    $data[$key] = stripcslashes($value);
    $data[$key] = htmlspecialchars($value);
    $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql, $values = [], $datatypes = "") {
    $con = $GLOBALS['con'];

    // Check if the query has placeholders and values are provided
    if (!empty($values) && !empty($datatypes)) {
        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

            if (mysqli_stmt_execute($stmt)) {
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            } else {
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - Select");
            }
        } else {
            die("Query cannot be prepared - Select");
        }
    } else {
        // Direct execution for queries without placeholders
        $res = mysqli_query($con, $sql);
        if (!$res) {
            die("Query cannot be executed - Select: " . mysqli_error($con));
        }
        return $res;
    }
}



?>
