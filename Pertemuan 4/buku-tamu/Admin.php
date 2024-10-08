<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: Login.php");
    exit();
}

require_once 'controllers/GuestController.php';

$guestController = new GuestController();

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $guestController->delete($id);
    header("Location: Admin.php");
}

$guests = $guestController->readAll();

include 'views/admin_dashboard.php';
?>