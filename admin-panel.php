<?php include './header.php'?>
<?php
$tailorsQuery = "SELECT * FROM tailors;";
$customerQuery = "SELECT * FROM customers;";
$premadeQuery = "SELECT * FROM premades;";

$tailorsResult = mysqli_query($conn, $tailorsQuery);
$customerResult = mysqli_query($conn, $customerQuery);
$premadesResult = mysqli_query($conn, $premadeQuery);

$tailorID;
$tailorName;
$tailorEmail;
$tailorPhone;
$tailorImage;
$tailorAddress;

$customerID;
$customerName;
$customerEmail;
$customerPhone;
$customerAddress;
$customerImage;

$premadeID;
$premadeImage;
$premadePrice;
$premadeSize;
$premadeColor;
$premadeName;
$premadeDescription;
$premadeTailorName;
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

while ($tailorRow = mysqli_fetch_assoc($tailorsResult)) {
    echo "<h1>Tailors</h1>";
    $tailorID = $tailorRow['tailor_id'];
    $tailorName = $tailorRow['tailor_name'];
    $tailorEmail = $tailorRow['tailor_email'];
    $tailorPhone = $tailorRow['tailor_phone'];
    $tailorImage = $tailorRow['tailor_img'];
    $tailorAddress = $tailorRow['tailor_address'];
    echo "<a href='./actions/deleteTailor.api.php?id=$tailorID'>Delete</a>";
    if (strpos($fullUrl, "Tailor%20cannot%20be%20deleted")) {
        echo '
    <div class="alert alert-danger" role="alert">
      Tailor cannot be deleted since theres still an outgoing order related to him/her.
    </div>
    ';
    }

}
while ($customerRow = mysqli_fetch_assoc($customerResult)) {
    echo "<h1>Customers</h1>";
    $customerID = $customerRow['customer_id'];
    $customerName = $customerRow['customer_name'];
    $customerEmail = $customerRow['customer_email'];
    $customerPhone = $customerRow['customer_phone'];
    $customerAddress = $customerRow['customer_address'];
    $customerImage = $customerRow['customer_image'];
    echo "<a href='./actions/deleteCustomer.api.php?id=$customerID'>Delete</a>";
    if (strpos($fullUrl, "Customer%20cannot%20be%20deleted")) {
        echo '
      <div class="alert alert-danger" role="alert">
        Customer Cannot be deleted since theres still an outgoing order related to him/her.
      </div>
      ';
    }
}

while ($premadeRow = mysqli_fetch_assoc($premadesResult)) {
    echo "<h1>Premades</h1>";
    $premadeID = $premadeRow['premade_id'];
    $premadeImage = $premadeRow['premade_img'];
    $premadePrice = $premadeRow['premade_price'];
    $premadeSize = $premadeRow['premade_size'];
    $premadeColor = $premadeRow['premade_color'];
    $premadeName = $premadeRow['premade_name'];
    $premadeDescription = $premadeRow['premade_description'];
    $premadeTailorName = $premadeRow['premade_tailor_name'];
    echo "<a href='./actions/deletePremade.api.php?id=$premadeID'>Delete</a>";
    if (strpos($fullUrl, "Premade%20cannot%20be%20deleted")) {
        echo '
    <div class="alert alert-danger" role="alert">
       Premade Cannot be deleted since theres still an outgoing order.
    </div>
    ';
    }

}
?>

<div class="container" style="height: 80vh; background: #ccc">

</div>

<?php include './footer.php'?>