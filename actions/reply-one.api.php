<?php
if (!isset($_POST['submit'])) {
  header('Location:../index.php');
}else{
  require '../db-connect.php';
  $orderID =mysqli_real_escape_string($conn,$_REQUEST['id']);
  $price =mysqli_real_escape_string($conn,$_REQUEST['price']);
  $delivery =mysqli_real_escape_string($conn,$_REQUEST['delivery']);
  $updateQuery="UPDATE contracts SET status='Pending Two', price=$price, delivery='$delivery' WHERE id=$orderID;";
  if (mysqli_query($conn,$updateQuery)) {
    header('Location:../tailor-contracts.php?Reply was sent successfully');
  }
} 
?>