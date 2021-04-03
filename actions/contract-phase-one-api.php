<?php
require '../db-connect.php';
session_start();
if (isset($_POST['submit']) && isset($_SESSION['id'])) {
    $ID = $_SESSION['id'];
    $tailorID = mysqli_real_escape_string($conn, $_REQUEST['id']);
    $image = $_FILES['image']['name'];
    $target = "../images/uploads/" . basename($image);
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileExt = explode('.', $image);
    $fileActualExt = strtolower(end($fileExt));
    $allow = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allow)) {

        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    $query = "INSERT INTO `contracts`(`tailor_id`,`customer_id`,`example_img`) VALUES ($tailorID,$ID,'$image')";
                    echo $query;
                    if (mysqli_query($conn, $query)) {
                        header('Location:../index.php?Order was placed successfully');
                    }
                }
            }
        }
    }
} else {
    header('Location:../login.php');
}