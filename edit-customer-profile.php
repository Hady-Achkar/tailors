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
  <div class="col-4 px-3">
    <label for="avatar" style="width:100%;" class="custom-image-label">
      <div class="avatar avatar-xl rounded-circle custom-avatar"
        style="background-image:url('./images/<?php echo $img ?>')">
      </div>
      <div class="avatar avatar-xl rounded-circle custom-camera" style="background-image:url('./images/camera.png')">
      </div>
    </label>
    <input type="file" hidden id="avatar">
  </div>
  <div class="col-8 px-3">
    <form method="POST" action="./actions/edit-customer-profile.api.php">
      <!-- Full Name area -->
      <div class="form-group px-3">
        <label class='w-100' for="name">Full Name</label>
        <input type="text" class="form-control" required value="<?php echo trim($fullName, ' ') ?>
                    " id="name" name="name" />

      </div>
      <!-- Email Area -->
      <div class="form-group px-3">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" required value="<?php echo $email ?>
                    " id="email" name="email" />

      </div>
      <!-- Phone Number Area -->
      <div class="form-group px-3">
        <label for="phone">Phone Number</label>
        <input type="number" class="form-control" required value="<?php echo intVal($phone) ?>
                    " id="phone" name="phone" />
      </div>
      <!-- Full Address Area-->
      <div class="form-group px-3">
        <label for="address">Full Address</label>
        <input type="text" class="form-control" required value="<?php echo trim($address, ' ') ?>
                    " id="address" name="address" />
      </div>
      <!-- Edit Profile Area -->
      <div class="form-group px-3">
        <button type="submit" class="form-control btn btn-primary" name="submit">
          Update
        </button>
      </div>
    </form>
  </div>


</div>