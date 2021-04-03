<?php include 'header.php';
if (isset($_GET['id'])) {
    $productID = $_GET['id'];
    $query = "SELECT * FROM premades WHERE premade_id=$productID;";
    $productResult = mysqli_query($conn, $query);
    $image = '';
    $price = '';
    $size = '';
    $name = '';
    $desc = '';
    $color = '';
    $tailorID = '';
    while ($row = mysqli_fetch_assoc($productResult)) {
        $image = $row['premade_img'];
        $price = $row['premade_price'];
        $size = $row['premade_size'];
        $name = $row['premade_name'];
        $desc = $row['premade_description'];
        $tname = $row['premade_tailor_name'];
        $color = $row['premade_color'];
        $tailorID = $row['tailor_id'];
    }
} else {
    header('Location:./index.php');
}

?>

<div class="container" style="min-height: 68vh">
    <div class="row py-5">
        <div class="col-md-6 col-xs-12">
            <img class="image-fluid" src="./images/<?php echo "$image" ?>" alt="" style="height: 400px; width:100%;">
        </div>
        <div class="col-md-6 col-xs-12 pl-5">
            <h1><?php echo "$name" ?></h1>
            <h2><?php echo "$desc" ?></h2>
            <h2>Tailor Name: <?php echo "$tname" ?></h2>

            <h2><span class="text-primary">Size:</span> <?php echo "$size" ?></h2>
            <div class='d-flex align-items-center'>
                <h2>Color:
                </h2>
                <div
                    style="width:20px;height:20px;background-color:<?php echo "$color"; ?>;border-radius:50%;margin-left:20px;">
                </div>
            </div>
            <h2 class="text-primary"><?php echo "$price" ?> $</h2>
            <?php
if (!isset($_SESSION['login'])) {
    echo "<div><a href='./login.php' class='btn btn-primary'>Login to order</a>
    </div>";
} else if ($_SESSION['user_type'] !== 'tailor') {
    echo "<div>
      <form method='POST' action='./actions/add_item_cart.api.php'>
        <div class='form-group mt-4'>
          <div>
            <label for=' qty'>Quantity</label>

          </div>

          <input class='form-control' type='number' name='tailor_id' id='tailor_id' hidden value='$tailorID' />
          <input type='number' name='product_id' id='product_id' hidden value='$productID' />
          <div class='form-group'>

            <input type='number' name='qty' id='qty' class='w-100' required />
          </div>
          <div>
            <input class='btn btn-primary btn-sm w-100' type='submit' name='submit' id='submit' value='Submit'
              class='w-100' />
          </div>
        </div>
      </form>
    </div>";

}
?>
        </div>
    </div>

</div>



<?php include './footer.php';?>