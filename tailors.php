<?php
include './header.php';
include './tailor-card.php';

?>
<style>
.container-fluid {
  background-image: url("https://images.unsplash.com/photo-1497997092403-f091fcf5b6c4?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1920&q=80");
  width: 100%;
  height: 40vh;
  object-fit: contain;
  background-repeat: no-repeat;
  background-position: center;
}

.main-text {
  width: 20vw;
  margin-right: 20vw;
  text-align: center;
  border-radius: 5px;
}
</style>

<div class="d-flex container-fluid justify-content-end align-items-center">
  <div class="p-3 mb-2 text-white main-text">
    <h3 class="bg-primary font-weight-bold">Our Tailors</h3>
    <h5 class="font-italic">
      “The first time you make something, follow the recipe, then figure out how
      to tailor it to your own tastes.”<br />
      -Ruth Reichl
    </h5>
  </div>
</div>
<div class="container">
  <div class="row">
    <?php
$desc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt";
$query = "SELECT * FROM tailors;";
$queryResult = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($queryResult)) {
    $alt = $row['tailor_name'];
    $src = $row['tailor_img'];
    $address = $row['tailor_address'];
    $tailorID = $row['tailor_id'];

    renderTailorCard("./images/uploads/$src", "${alt} Image", $row['tailor_name'], $address, $tailorID);
}
?>
  </div>
</div>
<?php include './footer.php'?>