<?php
if (isset($_GET['id'])) {
    require '../db-connect.php';
    $premadeID = $_GET['id'];
    $deleteQuery = "DELETE FROM premades WHERE premade_id=$premadeID;";
    if (mysqli_query($conn, $deleteQuery)) {
        header('Location:../admin-panel.php?Premade was deleted successfully');
    } else {
        header('Location:../admin-panel.php?Internal Server Error');
    }
} else {
    header('Location:../index.php');
}