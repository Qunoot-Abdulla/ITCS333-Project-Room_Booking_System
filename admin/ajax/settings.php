<?php
require('../db_config.php');
require('../essentials.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'toggle_shutdown') {
            $shutdown = (int)$_POST['shutdown'];
            $stmt = $con->prepare("UPDATE settings SET shutdown = ?");
            $stmt->bind_param("i", $shutdown);
            $stmt->execute();
            echo json_encode(['success' => $stmt->affected_rows > 0]);
            $stmt->close();
        } else {
            // Handle settings update
            $site_title = $_POST['site_title'];
            $site_about = $_POST['site_about'];
            $stmt = $con->prepare("UPDATE settings SET site_title = ?, site_about = ?");
            $stmt->bind_param("ss", $site_title, $site_about);
            $stmt->execute();
            echo json_encode(['success' => $stmt->affected_rows > 0]);
            $stmt->close();
        }
    }
}
?>
