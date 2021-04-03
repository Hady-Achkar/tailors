<?php
if (!isset($_POST['submit'])) {
    header('Location:../index.php');
}
require '../db-connect.php';
$chestSize = mysqli_real_escape_string($conn, $_REQUEST['chest']);
$bellySize = mysqli_real_escape_string($conn, $_REQUEST['belly']);
$shoulderSize = mysqli_real_escape_string($conn, $_REQUEST['shoulder']);
$neckSize = mysqli_real_escape_string($conn, $_REQUEST['neck']);
$buttocksSize = mysqli_real_escape_string($conn, $_REQUEST['buttocks']);
$backSize = mysqli_real_escape_string($conn, $_REQUEST['back']);
$waistSize = mysqli_real_escape_string($conn, $_REQUEST['waist']);
$theighSize = mysqli_real_escape_string($conn, $_REQUEST['theigh']);
$armSize = mysqli_real_escape_string($conn, $_REQUEST['arm']);
session_start();
$ID = $_SESSION['id'];
$insertQuery = "INSERT INTO `customer_details`(`chest`, `belly`, `shoulders`, `neck`, `back`, `buttocks`, `waist`,`arm`,`theigh`, `customer_id`) VALUES ('$chestSize','$bellySize','$shoulderSize','$neckSize','$backSize','$buttocksSize','$waistSize','$armSize','$theighSize','$ID');";
if (!mysqli_query($conn, $insertQuery)) {
    header('Location:../index.php?Query Error');
} else {
    header('Location:../index.php?Addedd successfully');

}