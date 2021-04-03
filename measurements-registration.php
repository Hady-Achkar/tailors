<?php include './db-connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <style>
  * {
    scroll-behavior: smooth;
  }
  </style>
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/80940f90fe.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand ml-4" href="./"><img src="./images/Logo.png" alt="" style='max-height:90px; width:auto;'></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mx-5" style='align-items: center;'>
        <li class="nav-item mx-4 active ">
          <a class="nav-link" href="./products.php">Products</a>
        </li>
        <li class="nav-item mx-4 active">
          <a class="nav-link" href="./tailors.php">Tailors</a>
        </li>
        <li class="nav-item mx-4 active">
          <a class="nav-link" href="./#contact">Contact us</a>
        </li>
        <li class="nav-item mx-4 active">
          <a class="nav-link" href="./#about">About us</a>
        </li>
        <li class="nav-item mx-4 active">
          <a class="nav-link" href="./fabrics.php?page=1">Fabrics</a>
        </li>
        <form class="form-inline my-2 my-lg-0 mx-5" action="./search.php" method='POST'>
          <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search.." aria-label="Search"
            name='search-bar' />
          <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit" name='submit'>
            Search
          </button>
        </form>
        <?php
if (isset($_SESSION['login']) && $_SESSION['login']) {
    if ($_SESSION['user_type'] == 'customer') {
        echo '
            <li class="nav-item mx-4 active">
            <a class=" btn btn-primary btn-sm" href="./customer-profile.php">Profile</a>
          </li>';
    } else {
        echo '
            <li class="nav-item mx-4 active">
            <a class=" btn btn-primary btn-sm" href="./tailor-contracts.php">Pending Contracts</a>
          </li>
            <li class="nav-item mx-4 active">
            <a class=" btn btn-primary btn-sm" href="./approved-contracts.php">Approved Contracts</a>
          </li>
          ';
    }
    echo '
            <li class="nav-item mx-4 active">
            <a class="btn btn-primary btn-sm" href="./actions/logout.api.php">Logout</a>
          </li>';
} else {
    echo '
            <li class="nav-item mx-4 active">
            <a class=" btn btn-primary btn-sm  my-sm-0" href="./login.php">Login</a>
          </li>
          <li class="nav-item mx-4 active">
          <a class=" btn btn-primary btn-sm  my-sm-0" href="./customer-register.php">Register</a>
        </li>
          ';

}

?>
      </ul>

    </div>
  </nav>
</body>

</html>
<div class="container my-4">
  <div class="row justify-content-center">
    <h2 class="adrs" style="color: #f2cdac; text-align: center">Measurements</h2>
  </div>
  <div class="row">
    <form action="./actions/add-customer-measurements.api.php" method='POST'>

      <div class="d-flex my-4 align-items-center justify-content-around">
        <label for="chest">Chest</label>
        <div>
          <input type="number" class="form-control" id="chest" name="chest" placeholder="Chest" required>
        </div>
      </div>

      <div class="d-flex my-4 align-items-center justify-content-around">
        <label for="belly">Belly</label>
        <div>
          <input type="number" class="form-control" id="belly" name="belly" placeholder="belly" required>
        </div>
      </div>

      <div class="d-flex my-4 align-items-center justify-content-around">
        <label for="shoulder">Shoulder</label>
        <div>
          <input type="number" class="form-control" id="shoulder" name="shoulder" placeholder="shoulder" required>
        </div>
      </div>

      <div class="d-flex my-4 align-items-center justify-content-around">
        <label for="neck">Neck</label>
        <div>
          <input type="number" class="form-control" id="neck" name="neck" placeholder="neck" required>
        </div>
      </div>

      <div class="d-flex my-4 align-items-center justify-content-around">
        <label for="back">Back</label>
        <div>
          <input type="number" class="form-control" id="back" name="back" placeholder="back" required>
        </div>
      </div>

      <div class="d-flex my-4 align-items-center justify-content-around">
        <label for="buttocks">Buttocks</label>
        <div>
          <input type="number" class="form-control" id="buttocks" name="buttocks" placeholder="buttocks" required>
        </div>
      </div>

      <div class="d-flex my-4 align-items-center justify-content-around">
        <label for="waist">Waist</label>
        <div>
          <input type="number" class="form-control" id="waist" name="waist" placeholder="waist" required>
        </div>
      </div>

      <div class="d-flex my-4 align-items-center justify-content-around">
        <label for="theigh">Theigh</label>
        <div>
          <input type="number" class="form-control" id="theigh" name="theigh" placeholder="theigh" required>
        </div>
      </div>

      <div class="d-flex my-4 align-items-center justify-content-around">
        <label for="arm">Arm</label>
        <div>
          <input type="number" class="form-control" id="arm" name="arm" placeholder="arm" required>
        </div>
      </div>

      <div class="d-flex my-4 align-items-center justify-content-around">
        <div>
          <input type="submit" class="form-control" id="submit" name="submit" value="submit">
        </div>
      </div>
    </form>
  </div>
</div>