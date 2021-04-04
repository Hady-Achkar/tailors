<?php
if (isset($_GET['id'])) {
    require '../db-connect.php';
    $tailorID = $_GET['id'];
    $deleteQuery = "DELETE FROM tailors WHERE tailor_id=$tailorID;";
    if (mysqli_query($conn, $deleteQuery)) {
        header('Location:../admin-panel.php?Tailor was deleted successfully');
    } else {
        header('Location:../admin-panel.php?Tailor cannot be deleted');
    }
} else {
    header('Location:../index.php');
}