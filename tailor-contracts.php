<?php
include './header.php';
require './db-connect.php';
if (!isset($_SESSION['login']) || $_SESSION['login'] != true || $_SESSION['user_type'] != 'tailor') {
    header('Location:./login.php');
}
$myID = $_SESSION['id'];
$tailorContractsQuery = "SELECT * FROM contracts WHERE status='Pending One' AND tailor_id=$myID";
$contractsResult = mysqli_query($conn, $tailorContractsQuery);
echo "<div class='container-fluid p-4'>";
echo "<table class='table'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th style='width:100px;'>Order ID</th>";
echo "<th style='width:100px;'>Chest Size</th>";
echo "<th style='width:100px;'>Belly Size</th>";
echo "<th style='width:100px;'>Shoulder Size</th>";
echo "<th style='width:100px;'>Neck Size</th>";
echo "<th style='width:100px;'>Buttocks Size</th>";
echo "<th style='width:100px;'>Back Size</th>";
echo "<th style='width:100px;'>Waist Size</th>";
echo "<th style='width:100px;'>Theigh Size</th>";
echo "<th style='width:100px;'>Arm Size</th>";
echo "<th style='width:100px;'>Product Image</th>";
echo "<th style='width:100px;'>Price</th>";
echo "<th style='width:100px;'>Delivery Date</th>";
echo "<th style='width:100px;'>Submit Offer</th>";
echo "</tr>";
echo "</thead>";

$counter = 1;
$chestSize;
$bellySize;
$shoulderSize;
$neckSize;
$buttocksSize;
$backSize;
$waistSize;
$theighSize;
$armSize;
$productImage;
echo "<tbody>";

while ($contractsRow = mysqli_fetch_assoc($contractsResult)) {
    $orderID = $contractsRow['id'];
    $counter = $counter + 1;
    $customerID = $contractsRow['customer_id'];
    $productImage = $contractsRow['example_img'];
    $measurementsQuery = "SELECT * FROM customer_details WHERE customer_id=$customerID;";
    $measrementsResult = mysqli_query($conn, $measurementsQuery);
    while ($measurementRow = mysqli_fetch_assoc($measrementsResult)) {
        $chestSize = $measurementRow['chest'];
        $bellySize = $measurementRow['belly'];
        $shoulderSize = $measurementRow['shoulders'];
        $neckSize = $measurementRow['neck'];
        $buttocksSize = $measurementRow['buttocks'];
        $backSize = $measurementRow['back'];
        $waistSize = $measurementRow['waist'];
        $theighSize = $measurementRow['theigh'];
        $armSize = $measurementRow['arm'];
        echo "<form method='POST' action='./actions/reply-one.api.php'";
        echo "<tr>";
        echo "<td>$orderID</td>";
        echo "<td>$chestSize</td>";
        echo "<td>$bellySize</td>";
        echo "<td>$shoulderSize</td>";
        echo "<td>$neckSize</td>";
        echo "<td>$buttocksSize</td>";
        echo "<td>$backSize</td>";
        echo "<td>$waistSize</td>";
        echo "<td>$theighSize</td>";
        echo "<td>$armSize</td>";
        echo "<td><a href='./images/uploads/$productImage'>Image</a></td>";
        echo "<td><input type='number' name='price' id='price' required/></td>";
        echo "<td><input type='date' name='delivery' id='delivery' required/></td>";
        echo "<td><input type='submit' name='submit' id='submit' value='submit'/></td>";
        echo "</tr>";
        echo "<input type='text' name='id' id='id' value='$orderID' hidden/>";
        echo "</form>";
    }

}
?>
</tbody>
</table>
</div>