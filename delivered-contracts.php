<?php include './header.php';
if (!isset($_SESSION['login']) || $_SESSION['login'] != true || $_SESSION['user_type'] != 'customer') {
    header('Location:./index.php');
}
require './db-connect.php';
$myID = $_SESSION['id'];
$fetchPendingQuery = "SELECT * FROM contracts WHERE customer_id=$myID AND status='Delivered'";
$fetchResult = mysqli_query($conn, $fetchPendingQuery);

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
echo "<th style='width:100px;'>Price</th>";
echo "<th style='width:100px;'>Delivery Date</th>";
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
echo "<tbody>";
while ($contractsRow = mysqli_fetch_assoc($fetchResult)) {

    $orderID = $contractsRow['id'];
    $price = $contractsRow['price'];
    $deliveryDate = $contractsRow['delivery'];
    $counter = $counter + 1;
    $measurementsQuery = "SELECT * FROM customer_details WHERE customer_id=$myID;";
    $measreumentsResult = mysqli_query($conn, $measurementsQuery);

    while ($measurementRow = mysqli_fetch_assoc($measreumentsResult)) {
        $chestSize = $measurementRow['chest'];
        $bellySize = $measurementRow['belly'];
        $shoulderSize = $measurementRow['shoulders'];
        $neckSize = $measurementRow['neck'];
        $buttocksSize = $measurementRow['buttocks'];
        $backSize = $measurementRow['back'];
        $waistSize = $measurementRow['waist'];
        $theighSize = $measurementRow['theigh'];
        $armSize = $measurementRow['arm'];
    }
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
    echo "<td>$price</td>";
    echo "<td>$deliveryDate</td>";
    echo "</tr>";
}
?>
</tbody>
</table>
</div>