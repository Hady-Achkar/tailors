<?php include './header.php';
if (!isset($_SESSION['id'])) {
    header('Location:./index.php');
}
require './db-connect.php';
$ID = $_SESSION['id'];
$customerProfileQuery = "SELECT * FROM customers WHERE customer_id=$ID;";
$customerProfileResult = mysqli_query($conn, $customerProfileQuery);
$img;
$fullName;
$email;
$phone;
$address;
while ($row = mysqli_fetch_assoc($customerProfileResult)) {
    $img = $row['customer_image'];
    $fullName = $row['customer_name'];
    $email = $row['customer_email'];
    $phone = $row['customer_phone'];
    $address = $row['customer_address'];
}
?>
<div class="row">
  <!-- Image Area -->
  <div class="col-4  px-4" style="height:100%">
    <label for="avatar" style="width:100%;" class="custom-image-label">
      <div class="avatar avatar-xl rounded-circle custom-avatar"
        style="background-image:url('./images/<?php echo $img ?>')">
      </div>
      <div class="avatar avatar-xl rounded-circle custom-camera" style="background-image:url('./images/camera.png')">
      </div>
    </label>
    <input type="file" hidden id="avatar">
  </div>
  <div class="col-8 px-4">
    <div>
      <!-- Full Name area -->
      <div class="form-group px-3">
        <div>
          <label for="name">Full Name</label>
        </div>
        <div>
          <p class="form-control" id="name"><?php echo $fullName ?></p>
        </div>
      </div>
      <!-- Email Area -->
      <div class="form-group px-3">
        <label for="email">Email Address</label>
        <div>
          <p class="form-control" id="email"><?php echo $email ?></p>
        </div>
      </div>
      <!-- Phone Number Area -->
      <div class="form-group px-3">
        <label for="phone">Phone Number</label>
        <div>
          <p class="form-control" id="phone"><?php echo $phone ?></p>
        </div>
      </div>
      <!-- Full Address Area-->
      <div class="form-group px-3">
        <label for="address">Full Address</label>
        <div>
          <p class="form-control" id="address"><?php echo $address ?></p>
        </div>
      </div>
      <!-- Edit Profile Area -->
      <div class="form-group px-3">
        <div>
          <a class="form-control btn btn-primary my-2" href="./edit-customer-profile.php">Edit
            Profile</a>
        </div>
      </div>
      <div class="form-group px-3">
        <div>
          <a class="btn btn-secondary float-right" href="./pending-contracts.php">Approved Orders</a>
        </div>
        <div>
          <a class="btn btn-secondary float-right" href="./delivered-contracts.php">Delivered Orders</a>
        </div>
      </div>
    </div>
  </div>
</div>