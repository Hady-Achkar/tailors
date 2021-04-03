<?php include './header.php';
if ($_SESSION['user_type'] !== 'tailor') {
    header('Location: ./index.php');
}
?>

<div class="container my-4 bg-light">
  <form class='p-4' action="./actions/add-product.api.php" method="POST" enctype='multipart/form-data'>
    <div class="form-group">
      <label for="name">Title</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Title" onkeyup='verifyPassword(this)'
        required>
    </div>
    <div class="form-group">
      <label for="size">Size</label>
      <select class="form-control" id="size" name="size" required>
        <option selected disabled hidden>Select</option>
        <option value="XS">XS</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="2XL">2XL</option>
        <option value="3XL">3XL</option>
      </select>
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" class="form-control" id="price" name="price" placeholder="Price"
        onkeyup='verifyPassword(this)' required>
    </div>
    <div class="form-group">
      <label for="color">Color</label>
      <input type="color" class="form-control" id="color" name="color" placeholder="Name" onkeyup='verifyPassword(this)'
        required>
    </div>
    <div class="form-group">
      <label for="desc">Description</label>
      <textarea type="text" class="form-control" id="desc" name="desc" placeholder="Description" rows='4'
        onkeyup='verifyPassword(this)' required></textarea>
    </div>
    <div class="form-group">
      <label for="tname">Tailor Name</label>
      <input type="text" class="form-control" id="tname" name="tname" placeholder="Tailor Name" rows='4'
        onkeyup='verifyPassword(this)' required></input>
    </div>
    <div class="custom-file mb-4">
      <input type="file" class="custom-file-input" id="image" name="image" title="Enter your profile image">
      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    </div>
    <input type="submit" disabled id="btn-submit" name="submit" class="btn btn-primary w-100">
  </form>
</div>
<script>
function verifyPassword() {
  let btnSubmit = document.getElementById('btn-submit');
  let name = document.getElementById('name');
  let price = document.getElementById('price');
  let color = document.getElementById('color');
  let desc = document.getElementById('desc');
  if (name.value == '' || price.value == '' || color.value == '' || desc.value == '') {
    btnSubmit.disabled = true;
  } else {
    btnSubmit.disabled = false;
  }
}
</script>
<?php include './footer.php'?>


name, img, price, size, color, name, description