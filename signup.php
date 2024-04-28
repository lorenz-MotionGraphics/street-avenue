<!doctype html>
<?php 
require './header.php'; 
?>
<div id="signup">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <form action="./signup/signup_process.php" method="post">
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
              <label for="email_id-1">Email</label>
              <input type="email" class="form-control" id="email_id-1" name="email" required>
            </div>
            <div class="form-group">
              <label for="password_id-1">Password</label>
              <input type="password" class="form-control" id="password_id-1" name="password" required>
            </div>
            <div class="form-group">
              <label for="confirm_password">Confirm Password</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
           <div class="d-flex justify-content-start">            
            <button type="submit" class="btn btn-primary btn-block mt-3">Sign Up</button>
            <button id="googleSignUpBtn" class="btn btn-success btn-block mt-3">
              <i class="fab fa-google"></i>
            </button>
           </div>
          </form>
        </div>
        <div class="card-footer text-center">
          <a style="text-decoration: none;" href="#login">Already have an account? Login here</a>
        </div>
      </div>
    </div>
  </div>
</div>
