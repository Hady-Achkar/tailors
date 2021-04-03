<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location:../login.php');
} else {
    if (isset($_POST['submit'])) {
        require '../db-connect.php';
        $userID = $_SESSION['id'];
        $premadeID = mysqli_real_escape_string($conn, $_REQUEST['product_id']);
        $quantity = mysqli_real_escape_string($conn, $_REQUEST['qty']);
        $tailorID = mysqli_real_escape_string($conn, $_REQUEST['tailor_id']);

        $query = "INSERT INTO cart_items (customer_id,premade_id,quantity,tailor_id) VALUES($userID,$premadeID,$quantity,$tailorID);";
        $result = mysqli_query($conn, $query);
        header("Location:../product.php?id=$premadeID&Order was added successfully");

    } else {
        header('Location:../index.php');
    }
}