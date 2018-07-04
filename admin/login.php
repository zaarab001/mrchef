<?php
session_start();
ob_start();
include('includes/dbconnect.php');
?>
<?php
//authentication file
if($_SESSION['loggedin'] != TRUE){
	header("location:login.php");
}
else{
	
	}
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
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
<?php
		 if(isset($_POST['Log_in']))
		 {
		
//input validation
	function sanitize($dbC, $str)
	{
	$str = @trim($str);
	$str = strip_tags($str);
	
	return mysqli_real_escape_string($dbC,$str);
	}

			$user_name = sanitize($dbC,$_POST['user_name']);
			$password = md5($_POST['password']);
			
			if(!(empty($user_name)) && !(empty($password)))
			{			 
			$Log_in = mysqli_query($dbC, "SELECT admin_id FROM admin WHERE user_name = '$user_name' && password = '$password'");
			
			if (mysqli_num_rows($Log_in) == 1)
			
			{
				$row = mysqli_fetch_assoc($Log_in);
				
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['first_name'] = $row['first_name'];
				$_SESSION['last_name'] = $row['last_name'];
							
				ob_flush();
				
				header('location:index.php');
								
				//echo '<span class="label label-success">Log in Successfull</span>';
				}
				else
				{
					echo '<span class="label label-danger">Log in detail incorrect</span>';
					}
			}
						
			}
?>
                  <form action="" method="post" class="form-validate">
                    <div class="form-group">
                      <input id="user_name" type="text" name="user_name" required data-msg="Please enter your username" class="input-material">
                      <label for="user_name" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="password" class="label-material">Password</label>
                    </div><button type="submit" name="Log_in" class="btn btn-primary">Log in</button>
                    
                  </form><a href="#" class="forgot-pass">Forgot Password?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by&nbsp;zaarab</p>

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