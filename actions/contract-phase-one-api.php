<?php
require '../db-connect.php';
session_start();
if (isset($_GET['id']) && isset($_SESSION['id'])) {
    $ID = $_SESSION['id'];
    $tailorID = $_GET['id'];
    $query = "INSERT INTO `contracts`(`tailor_id`,`customer_id`) VALUES ($tailorID,$ID)";
    if (mysqli_query($conn, $query)) {
        header('Location:../index.php?Order was placed successfully');
    }
} else {
    header('Location:../login.php');
}