<?php include './header.php';
include './productCard.php';?>

<div class="container" style="min-height:70vh">
  <div class="row">
<?php 

$query="SELECT * FROM premades";

$resultQuery=mysqli_query($conn,$query);
while ($row=mysqli_fetch_assoc($resultQuery)) {
  $src=$row['premade_img'];
renderProductCard($row['premade_name'],$src,$row['premade_id'],$row['premade_price'],$row['premade_color']);
}
?>
 </div>
</div>

<?php include './footer.php'?>