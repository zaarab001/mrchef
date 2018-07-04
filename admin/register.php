<?php
include('includes/dbconnect.php');
?>

<!DOCTYPE html>
<html>
  <head>
<?php
include('includes/head.php');
?>
  </head>
  <body>

   <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                     <h1>Mr. Chef</h1>
                  </div>
                  <div align="center" style="margin-left:110px"><img src="img/logo.png" alt="" width="300px" height="250px" ></div>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <?php
            include ('includes/admin_reg.php');
			?>
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="text-left form-validate">
                    <div class="form-group-material">
                      <input id="user_name" type="text" name="user_name" required data-msg="Please enter your username" class="input-material">
                      <label for="user_name" class="label-material">Username</label>
                    </div>
                    <div class="form-group-material">
                      <input id="first_name" type="text" name="first_name" required data-msg="Please enter your first name" class="input-material">
                      <label for="first_name" class="label-material">First Name</label>
                    </div>
                     <div class="form-group-material">
                      <input id="last_name" type="text" name="last_name" required data-msg="Please enter your last name" class="input-material">
                      <label for="last_name" class="label-material">Last Name</label>
                    </div>
                    <div class="form-group-material">
                      <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="password" class="label-material">Password        </label>
                    </div>
                    <div class="form-group terms-conditions text-center">
                      <input id="register_agree" name="register_agree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                      <label for="register_agree">I agree with the terms and policy</label>
                    </div>
                    <div class="form-group text-center">
                      <input id="register" type="submit" value="register" class="btn btn-primary">
                    </div>
                  </form><small>Already have an account? </small><a href="login.php" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by &nbsp;&nbsp;zaarab</p>
      
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>