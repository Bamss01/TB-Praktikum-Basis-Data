<?php
session_start();
if (!isset($_SESSION['login_id']) || $_SESSION['role'] !== 'user') {
    header("Location: login.php");
    exit;
}
?>
