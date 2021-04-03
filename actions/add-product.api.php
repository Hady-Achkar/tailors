<?php
session_start();
require '../db-connect.php';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $price = mysqli_real_escape_string($conn, $_REQUEST['price']);
    $color = mysqli_real_escape_string($conn, $_REQUEST['color']);
    $desc = mysqli_real_escape_string($conn, $_REQUEST['desc']);
    $size = mysqli_real_escape_string($conn, $_REQUEST['size']);
    $tname = mysqli_real_escape_string($conn, $_REQUEST['tname']);
    $image = $_FILES['image']['name'];
    $target = "../images/" . basename($image);
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileExt = explode('.', $image);
    $fileActualExt = strtolower(end($fileExt));
    $allow = array('jpg', 'jpeg', 'png');
    $tailorID = $_SESSION['id'];
    if (in_array($fileActualExt, $allow)) {

        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    $query = "INSERT INTO premades (premade_img, premade_price, premade_size,premade_color,premade_name,premade_description,premade_tailor_name,tailor_id)
              VALUES ('$image','$price','$size','$color','$name','$desc','$tname',$tailorID)";
                    echo $query;
                    if (mysqli_query($conn, $query)) {
                        header('Location:../index.php?Product added successfully!');
                    }

                } else {

                    echo "File not uploaded";
                }
            } else {
                header('Location:../index.php?Your file is too big!');
            }
        } else {
            header('Location:../index.php?There was an error uploading your file!');
        }

    } else {
        header('Location:../index.php?Image format is not supported!');
    }

} else {
    header('Location:../index.php');
}