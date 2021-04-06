<?php include './header.php'?>
<div class="container-fluid mx-auto" style="min-height: 80vh; background: #ccc;max-width: 1280px;">

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

echo "<div class='container-fluid p-4'>";
echo "<table class='table'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th style='width:100px;'>Tailor ID</th>";
echo "<th style='width:100px;'>Tailor Name</th>";
echo "<th style='width:100px;'>Tailor Email</th>";
echo "<th style='width:100px;'>Tailor Phone</th>";
echo "<th style='width:100px;'>Tailor Image</th>";
echo "<th style='width:100px;'>Tailor Address</th>";
echo "<th style='width:100px;'>Delete Tailor(if possible)</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody style='text-align:center'>";

echo "<h1>Tailors</h1>";
while ($tailorRow = mysqli_fetch_assoc($tailorsResult)) {
    $tailorID = $tailorRow['tailor_id'];
    $tailorName = $tailorRow['tailor_name'];
    $tailorEmail = $tailorRow['tailor_email'];
    $tailorPhone = $tailorRow['tailor_phone'];
    $tailorImage = $tailorRow['tailor_img'];
    $tailorAddress = $tailorRow['tailor_address'];
    echo "<tr>";
    echo "<td>$tailorID</td>";
    echo "<td>$tailorName</td>";
    echo "<td>$tailorEmail</td>";
    echo "<td>$tailorPhone</td>";
    echo "<td><a href='./images/$tailorImage' target=_blank>Image</a></td>";
    echo "<td>$tailorAddress</td>";
    echo "<td><a href='./actions/deleteTailor.api.php?id=$tailorID'>Delete</a></td>";
    echo "</tr>";
    if (strpos($fullUrl, "Tailor%20cannot%20be%20deleted")) {
        echo '
    <div class="alert alert-danger" role="alert">
      Tailor cannot be deleted since theres still an outgoing order related to him/her.
    </div>
    ';
    }

}
echo "
</tbody>
</table>
</div>";

echo "<div class='container-fluid p-4'>";
echo "<table class='table'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th style='width:100px;'>Customer ID</th>";
echo "<th style='width:100px;'>Customer Name</th>";
echo "<th style='width:100px;'>Customer Email</th>";
echo "<th style='width:100px;'>Customer Phone</th>";
echo "<th style='width:100px;'>Customer Image</th>";
echo "<th style='width:100px;'>Customer Address</th>";
echo "<th style='width:100px;'>Delete Customer(if possible)</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody style='text-align:center'>";
echo "<h1>Customers</h1>";
while ($customerRow = mysqli_fetch_assoc($customerResult)) {
    $customerID = $customerRow['customer_id'];
    $customerName = $customerRow['customer_name'];
    $customerEmail = $customerRow['customer_email'];
    $customerPhone = $customerRow['customer_phone'];
    $customerImage = $customerRow['customer_image'];
    $customerAddress = $customerRow['customer_address'];
    echo "<tr>";
    echo "<td>$customerID</td>";
    echo "<td>$customerName</td>";
    echo "<td>$customerEmail</td>";
    echo "<td>$customerPhone</td>";
    echo "<td><a href='./images/$customerImage' target=_blank>Image</a></td>";
    echo "<td>$customerAddress</td>";
    echo "<td><a href='./actions/deleteCustomer.api.php?id=$customerID'>Delete</a></td>";
    echo "</tr>";
    if (strpos($fullUrl, "Customer%20cannot%20be%20deleted")) {
        echo '
      <div class="alert alert-danger" role="alert">
        Customer Cannot be deleted since theres still an outgoing order related to him/her.
      </div>
      ';
    }
}

echo "
</tbody>
</table>
</div>";

echo "<div class='container-fluid p-4'>";
echo "<table class='table'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th style='width:100px;'>Premade ID</th>";
echo "<th style='width:100px;'>Premade Name</th>";
echo "<th style='width:100px;'>Premade Image</th>";
echo "<th style='width:100px;'>Premade Price</th>";
echo "<th style='width:100px;'>Premade Size</th>";
echo "<th style='width:100px;'>Premade Color</th>";
echo "<th style='width:100px;'>Premade Description</th>";
echo "<th style='width:100px;'>Premade Tailor Name</th>";
echo "<th style='width:100px;'>Delete Premade(if possible)</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody style='text-align:center'>";
echo "<h1>Premades</h1>";
while ($premadeRow = mysqli_fetch_assoc($premadesResult)) {
    $premadeID = $premadeRow['premade_id'];
    $premadeName = $premadeRow['premade_name'];
    $premadeImage = $premadeRow['premade_img'];
    $premadePrice = $premadeRow['premade_price'];
    $premadeSize = $premadeRow['premade_size'];
    $premadeColor = $premadeRow['premade_color'];
    $premadeDescription = $premadeRow['premade_description'];
    $premadeTailorName = $premadeRow['premade_tailor_name'];
    echo "<tr>";
    echo "<td>$premadeID</td>";
    echo "<td>$premadeName</td>";
    echo "<td><a href='./images/$premadeImage' target=_blank>Image</a></td>";
    echo "<td>$premadePrice</td>";
    echo "<td>$premadeSize</td>";
    echo "<td>$premadeColor</td>";
    echo "<td>$premadeDescription</td>";
    echo "<td>$premadeTailorName</td>";
    echo "<td><a href='./actions/deletePremade.api.php?id=$premadeID'>Delete</a></td>";
    echo "</tr>";
    if (strpos($fullUrl, "Premade%20cannot%20be%20deleted")) {
        echo '
    <div class="alert alert-danger" role="alert">
       Premade Cannot be deleted since theres still an outgoing order.
    </div>
    ';
    }

}
echo "
</tbody>
</table>
</div>";
?>



</div>

<?php include './footer.php'?>