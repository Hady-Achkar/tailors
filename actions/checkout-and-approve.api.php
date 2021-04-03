<?php 
if (!isset($_GET['id'])) {
  header('Location:../index.php');
}else{
  require '../db-connect.php';
  $orderID = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $updateQuery="UPDATE contracts SET status='Approved' WHERE id=$orderID;";
  mysqli_query($conn,$updateQuery);
  header('Location:../index.php?Order was approved');
}
?>