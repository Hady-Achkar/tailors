<?php include './header.php'?>

  
  <div class="half" style="height:100%">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Create a tailor account at <strong>Tailors</strong></h3>
              <p class="mb-4">Join us now & enjoy our perks!</p>
              </div>
              <form action="./actions/customer-register.api.php" method="POST" enctype='multipart/form-data'>
                <div class="form-group first">
                  <label for="username">Full Name</label>
                  <input type="text" class="form-control" placeholder="John Doe" id="fullName" name="fullName" required title="Enter your full name">
                </div>
                <div class="form-group second">
                  <label for="username">Email Address</label>
                  <input type="email" class="form-control" placeholder="email@domain.com" id="email" name="email" required title="Enter your email address">
                </div>
                <div class="form-group third mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="password" required title="Enter your password">
                </div>
                <div class="form-group forth">
                  <label for="username">Phone Number</label>
                  <input type="phone" class="form-control" placeholder="011 XXX XXXX" id="phone" name="phone" required title="Enter your phone number">
                </div>
                <div class="form-group fifth">
                  <label for="username">Profile Image</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" name="image" rquired title="Enter your profile image">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                  </div>
                </div>
                <div class="form-group last mb-3">
                  <label for="username">Full Address</label>
                  <input type="text" class="form-control" placeholder="Your address" id="address" name="address" required title="Enter your full address">
                </div>
                <div class="d-sm-flex mb-5 justify-content-center align-items-center">
                  <span><a href="./login.php" class="forgot-pass">Already have an account?</a></span> 
                </div>
                <div class="d-sm-flex mb-5 justify-content-center align-items-center">
                  <span><a href="./tailor-register.php" class="forgot-pass">Create a tailor account?</a></span> 
                  </div>
                  
                <input type="submit" name="submit" value="Register Now" class="btn btn-block btn-primary">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include './footer.php'?>