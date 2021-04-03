<?php include './header.php';
require './db-connect.php';
include './tailor-card.php'?>

<div class="container-fluid p-0">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img style="height: 600px; filter: grayscale(100%)" class="d-block w-100" src="./assets/1.jpg"
          alt="First slide" />
      </div>
      <div class="carousel-item">
        <img style="height: 600px; filter: grayscale(100%)" class="d-block w-100" src="./assets/2.jpg"
          alt="Second slide" />
      </div>
      <div class="carousel-item">
        <img style="height: 600px; filter: grayscale(100%)" class="d-block w-100" src="./assets/3.jpg"
          alt="Third slide" />
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-6 justify-content-center">
        <img src="./images/tailor.png" alt="" style="max-height: 200px; width: auto; text-align: center"
          class="mx-auto d-block" />
        <div class="container justify-content-center text-center mt-5">
          <a href="./tailor-register.php" class="btn btn-primary btn-lg">Register as a Tailor</a>
        </div>
      </div>
      <div class="col-6 justify-content-center text-center">
        <img src="./images/person.png" alt="" style="max-height: 200px; width: auto; text-align: center"
          class="mx-auto d-block" />
        <div class="container justify-content-center text-center mt-5">
          <a href="./customer-register.php" class="btn btn-primary btn-lg">Register as a Customer</a>
        </div>
      </div>
    </div>
  </div>

  <section id="about">
    <div class="container-fluid mt-5" style="background-color: #fff5cd">
      <div class="container">
        <div class="row">
          <div class="col-6 p-6 d-flex justify-content-end">
            <img src="./images/4.jpg" alt="" />
          </div>
          <div class="col-6 align-self-center p-4">
            <h1 class="mb-4">About</h1>
            <h6>
              Lorem ipsum, or lipsum as it is sometimes known, is dummy text
              used in laying out print, graphic or web designs. The passage is
              attributed to an unknown typesetter in the 15th century who is
              thought to have scrambled parts of Cicero's De Finibus Bonorum et
              Malorum for use in a type specimen book.
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container-fluid bg-light">
      <div class="container mt-4 p-4">
        <div class="row">
          <div class="col-6 align-self-center p-4 bg-light">
            <h1>Contact Here</h1>
            <h4>We will get back to you in no time!</h4>
          </div>
          <div class="col-6 justify-content-end">
            <form method="POST" action="./actions/contact.api.php">
              <div class="form-group">
                <textarea class="form-control" id="message" rows="3" name="message" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" />
              </div>
              <div class="form-group">
                <input type="tel" name="phone" class="form-control" id="exampleFormControlInput1"
                  placeholder="05 0515 05151" />
              </div>
              <button name="submit" type="submit" class="btn btn-primary w-100">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include './footer.php'?>

  <style>
  * {
    scroll-behavior: smooth;
  }
  </style>
</div>