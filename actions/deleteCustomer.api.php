<?php
if (isset($_GET['id'])) {
    require '../db-connect.php';
    $customerID = $_GET['id'];
    $deleteQuery = "DELETE FROM customers WHERE customer_id=$customerID;";
    if (mysqli_query($conn, $deleteQuery)) {
        header('Location:../admin-panel.php?Customer was deleted successfully');
    } else {
        header('Location:../admin-panel.php?Customer cannot be deleted');
    }
} else {
    header('Location:../index.php');
}