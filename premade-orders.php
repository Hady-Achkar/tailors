<?php
include './header.php';
require './db-connect.php';
if (!isset($_SESSION['login']) || $_SESSION['user_type'] != 'customer') {
    header('Location:./index.php');
}
$customerID = $_SESSION['id'];
$fetchPremadeOrdersQuery = "SELECT * FROM  cart_items WHERE customer_id=$customerID;";
$premadesResult = mysqli_query($conn, $fetchPremadeOrdersQuery);
$cartOrderID;
$customerID;
$qty;
$tailorID;
$productImg;
$productPrice;
$customerName;
$productName;
$totalPrice = 0;
echo "<div class='container my-4'>";
echo "<table style='text-align:center;'>";
echo "<tr>";
echo "<th style='width:200px;'>Order ID</th>";
echo "<th style='width:200px;'>Product Name</th>";
echo "<th style='width:200px;'>Product Price</th>";
echo "<th style='width:200px;'>Order Quantity</th>";
echo "<th style='width:200px;'>Customer Name</th>";
echo "</tr>";
while ($premadesRow = mysqli_fetch_assoc($premadesResult)) {
    $cartOrderID = $premadesRow['cart_items_id'];
    $customerID = $premadesRow['customer_id'];
    $premadeID = $premadesRow['premade_id'];
    $qty = $premadesRow['quantity'];
    $tailorID = $premadesRow['tailor_id'];
    $productQuery = "SELECT * FROM premades WHERE premade_id=$premadeID;";
    $productResult = mysqli_query($conn, $productQuery);
    while ($productRow = mysqli_fetch_assoc($productResult)) {
        $productImg = $productRow['premade_img'];
        $productPrice = $productRow['premade_price'];
        $productName = $productRow['premade_name'];
    }
    $customerQuery = "SELECT * FROM customers WHERE customer_id=$customerID;";
    $customerResult = mysqli_query($conn, $customerQuery);
    while ($customerRow = mysqli_fetch_assoc($customerResult)) {
        $customerName = $customerRow['customer_name'];
    }
    echo "<tr>";
    echo "<td>$cartOrderID</td>";
    echo "<td>$productName</td>";
    echo "<td>$productPrice</td>";
    echo "<td>$qty</td>";
    echo "<td>$customerName</td>";
    echo "</tr>";
    $totalPrice = $totalPrice + ($productPrice * $qty);
}
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td>total Price $totalPrice</td>";
echo "<td></td>";
echo "<td></td>";
echo "</tr>";
?>

</div>
</table>
