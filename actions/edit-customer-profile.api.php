<?php
if (!isset($_POST['submit'])) {
    header('Location:../index.php');
}
require '../db-connect.php';
session_start();
$ID = $_SESSION['id'];
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$updatedProfileQuery = "UPDATE customers SET customer_name='$name', customer_email='$email', customer_address='$address',customer_phone='$phone' WHERE customer_id=$ID";
if (mysqli_query($conn, $updatedProfileQuery)) {
    header('Location:../index.php?Profile updated successfully');
} else {
    header('Location:../index.php?Query Error');
}