<?php
require '../db-connect.php';
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
    $type = mysqli_real_escape_string($conn, $_REQUEST['type']);
    if ($type == 'Tailor') {
        $stmt = mysqli_stmt_init($conn);
        $query = "SELECT * FROM tailors WHERE tailor_email=? ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo mysqli_error($conn);
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                if (count($row = mysqli_fetch_assoc($result)) == 0) {
                    header("Location:../login.php?signin=Account Not Found &email=$email");
                } else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if (password_verify($password, $row['tailor_password'])) {
                            session_start();
                            $_SESSION['id'] = $row['tailor_id'];
                            $_SESSION['login'] = true;
                            $_SESSION['email'] = $email;
                            $_SESSION['user_type'] = 'tailor';
                            $_SESSION['measurements_set'] = 'tailor';
                            $stmt->close();
                            header("location:../index.php?signed In");
                        } else {
                            header("Location:../login.php?signin=Wrong email and password comibination&email=$email");
                        }
                    }
                }
            } else {
                echo mysqli_error($conn);
            }
        }} else {
        $stmt = mysqli_stmt_init($conn);
        $query = "SELECT * FROM customers  WHERE customer_email=? ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo mysqli_error($conn);
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                if (count($row = mysqli_fetch_assoc($result)) == 0) {
                    header("Location:../login.php?signin=Account Not Found &email=$email");
                } else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if (password_verify($password, $row['customer_password'])) {
                            session_start();
                            $_SESSION['id'] = $row['customer_id'];
                            $_SESSION['login'] = true;
                            $_SESSION['email'] = $email;
                            $_SESSION['user_type'] = 'customer';
                            $_SESSION['measurements_set'] = 'true';
                            $stmt->close();
                            header("location:../index.php?signed In");
                        } else {
                            header("Location:../login.php?signin=Wrong email and password comibination&email=$email");
                        }

                    }
                }
            } else {
                echo mysqli_error($conn);
            }
        }
    }
} else {
    header("location:../index.php");
}