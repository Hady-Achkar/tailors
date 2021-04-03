<?php include './header.php';
require './db-connect.php';
include './tailor-card.php'?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="15"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="16"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="17"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="18"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="19"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="20"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="22"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="23"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="24"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="25"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="26"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="27"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="28"></li>
    </ol>
    <div style="padding: 40px; background-color: gray; ">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./fabric/fab.jpeg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h1 style="color:black ;width: 40px">Fabrics</h1>
            <p style="color:black "></p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 " src="./fabric/canvas fabric.jpg" alt="Second slide">
          <div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Cashmere-wool-pile.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Chenille fabric.jfif" alt="4 slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/chiffon fabric.jfif" alt="5slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/cooten fabric.jpg" alt="6slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Crêpe fabric.jpg" alt="7slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100"
            src="./fabric/crystalorganza_silverd_WeaverDee_fabric_sewing-dressmaking-crafts.jpg" alt="8slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Damask fabric.jfif" alt="9slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Gingham.jfif" alt="10slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Jersey Fabric.jfif" alt="11slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Leather.jpg" alt="12slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Linen.jfif" alt="13slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Merino Wool.jpg" alt="14slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Modal.jfif" alt="15slide">
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Musli.jpg" alt="16slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Organza.jpg" alt="17slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Polyester.jfif" alt="18slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Satin.jfif" alt="19slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Silk.jfif" alt="20slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Spandex.jpg" alt="21slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Suede Fabric.jpg" alt="22slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Taffeta Fabric.jfif" alt="23slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Tweed.jpg" alt="24slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Twill.jfif" alt="25slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Velvet.jfif" alt="26slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fabric/Viscose.jpg" alt="27slide">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</body>
<section>
  <?php include './footer.php'?>
</section>