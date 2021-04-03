<?php 
if (!isset($_GET['id'])) {
  header('Location:../index.php');
}else{
  $orderID=$_GET['id'];
  require '../db-connect.php';
  $deliverQuery="UPDATE contracts SET status='Delivered' WHERE id=$orderID;";
  if (mysqli_query($conn,$deliverQuery)) {
    header('Location:../approved-contracts.php?order was delivered successfully');
  }
}
?>