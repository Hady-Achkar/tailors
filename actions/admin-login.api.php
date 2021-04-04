<?php
session_unset();
session_destroy();
session_start();

require '../db-connect.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
    $stmt = mysqli_stmt_init($conn);
    $query = "SELECT * FROM admin WHERE admin_email=?;";
    if (!mysqli_stmt_prepare($stmt, $query)) {
        echo "SQL Error";
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);

        if (mysqli_stmt_execute($stmt)) {
            $getResult = mysqli_stmt_get_result($stmt);
            if ($stmt->affected_rows > 0) {
                while ($rows = mysqli_fetch_assoc($getResult)) {
                    if (password_verify($password, $rows['admin_password'])) {
                        session_start();
                        $_SESSION['admin'] = true;
                        $_SESSION['admin_id'] = $rows['admin_id'];
                        $_SESSION['email'] = $rows['admin_email'];
                        $_SESSION['global'] = true;
                        $_SESSION['login'] = true;
                        $_SESSION['user_type'] = "admin";
                        header("Location:../admin-panel.php?admin-login=true");
                        exit();
                    } else {
                        header("Location:../admin.php?admin-login=false &&Wrong Email=$email or password");
                    }
                }
            } else {
                header("Location:../admin.php?login=false");
            }
        }
    }
} else {
    header("Location:../index.php");
}