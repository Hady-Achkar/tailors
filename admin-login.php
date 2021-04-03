<?php include './header.php'?>
<div class="half">
  <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
  <div class="contents order-2 order-md-1">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-6">
          <div class="form-block">
            <div class="text-center mb-5">
              <h3>Login to <strong>Tailors</strong> Admin Dashboard</h3>
              <p class="mb-4">We are glad to see you again!</p>
            </div>
            <form action="./actions/admin-login.api.php" method="POST">
              <div class="form-group first">
                <label for="username">Email Address</label>
                <input type="email" class="form-control" onkeyup='verifyPassword(this)' placeholder="email@domain.com"
                  id="email" name="email" required title="Enter your email">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" onkeyup='verifyPassword(this)' placeholder="Your Password"
                  id="password" name="password" required title="Enter your password">
              </div>
              <div class="d-sm-flex mb-5 justify-content-center align-items-center">
                <span><a href="./register.php" class="forgot-pass">Create an Account?</a></span>
              </div>
              <input type="submit" disabled name="submit" value="Log In" id='btn-submit'
                class="btn btn-block btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
function verifyPassword() {
  let btnSubmit = document.getElementById('btn-submit');
  let password = document.getElementById('password');
  let email = document.getElementById('email');
  if (password.value == '' || email.value == '') {
    btnSubmit.disabled = true;
  } else {
    btnSubmit.disabled = false;
  }
}
</script>

<?php include './footer.php'?>