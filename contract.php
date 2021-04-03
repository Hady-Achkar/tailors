<?php 
include './header.php';
if (!isset($_SESSION['login'])&&$_SESSION['login']==false&&$_SESSION['user-type']!='customer'&&!isset($_GET['id'])) {
  header('Location:./login.php');
}
?>
<div class="container my-4">
	<div class="row justify-content-center">
		<h2 class="adrs" style="color: #f2cdac; text-align: center">Contract</h2>
	</div>
<form action="./actions/contract-phase-one-api.php" method='POST'>

  <div class="d-flex my-4 align-items-center justify-content-around">
    <label for="chest">Chest</label>
    <div>
      <input type="number"  class="form-control" id="chest" name="chest" placeholder="Chest"  required>
    </div>
  </div>

  <div class="d-flex my-4 align-items-center justify-content-around">
    <label for="belly">Belly</label>
    <div>
      <input type="number"  class="form-control" id="belly" name="belly" placeholder="belly"  required>
    </div>
  </div>

  <div class="d-flex my-4 align-items-center justify-content-around">
    <label for="shoulder">Shoulder</label>
    <div>
      <input type="number"  class="form-control" id="shoulder" name="shoulder" placeholder="shoulder"  required>
    </div>
  </div>

  <div class="d-flex my-4 align-items-center justify-content-around">
    <label for="neck">Neck</label>
    <div>
      <input type="number"  class="form-control" id="neck" name="neck" placeholder="neck"  required>
    </div>
  </div>

  <div class="d-flex my-4 align-items-center justify-content-around">
    <label for="back">Back</label>
    <div>
      <input type="number"  class="form-control" id="back" name="back" placeholder="back"  required>
    </div>
  </div>

  <div class="d-flex my-4 align-items-center justify-content-around">
    <label for="buttocks">Buttocks</label>
    <div>
      <input type="number"  class="form-control" id="buttocks" name="buttocks" placeholder="buttocks"  required>
    </div>
  </div>

  <div class="d-flex my-4 align-items-center justify-content-around">
    <label for="waist">Waist</label>
    <div>
      <input type="number"  class="form-control" id="waist" name="waist" placeholder="waist"  required>
    </div>
  </div>

  <div class="d-flex my-4 align-items-center justify-content-around">
    <label for="theigh">Theigh</label>
    <div>
      <input type="number"  class="form-control" id="theigh" name="theigh" placeholder="theigh"  required>
    </div>
  </div>
  
  <div class="d-flex my-4 align-items-center justify-content-around">
    <label for="arm">Arm</label>
    <div>
      <input type="number"  class="form-control" id="arm" name="arm" placeholder="arm"  required>
    </div>
  </div>

  <div class="d-flex my-4 align-items-center justify-content-around">
  <div>
      <input type="text" value="<?php echo $_GET['id']?>" class="form-control" id="tailor" name="tailor" hidden >
    </div>
    <div>
      <input type="submit" class="form-control" id="submit" name="submit" value="submit">
    </div>
  </div>
</form>

</div>
