<?php require '../db-connect.php';

if (isset($_POST['submit'])) {
    $message = mysqli_real_escape_string($conn, $_REQUEST['message']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);

    $query = "INSERT INTO contact (contact_msg, contact_phone, contact_email) VALUES ('$message', $phone, '$email')";

    if (mysqli_query($conn, $query)) {
        header('Location:../index.php?success');
    } else {
        echo "query error";

    }
} else {
    echo "not set";
}