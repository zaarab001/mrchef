<?php
session_start();
ob_start();

include ('include/dbconnect.php');
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Mr. Chef</title>
     <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Login form widgets"/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="login/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- bg effect -->
	<div id="bg">
		<canvas></canvas>
		<canvas></canvas>
		<canvas></canvas>
	</div>
	<!-- //bg effect -->
	<!-- title -->
	<h1>Members Login</h1>
	<!-- //title -->
	<!-- content -->
     
  
	<div class="sub-main-w3">
 <?php
		 if(isset($_POST['login']))
		 {
		
//input validation
	function sanitize($dbC, $str)
	{
	$str = @trim($str);
	$str = strip_tags($str);
	
	return mysqli_real_escape_string($dbC,$str);
	}

			$email = sanitize($dbC, $_POST['email']);
			$password = md5($_POST['password']);
			
			if(!(empty($email)) && !(empty($password)))
			{			 
			$Log_in = mysqli_query($dbC, "SELECT * FROM user WHERE email = '$email' && password = '$password'");
			
			if (mysqli_num_rows($Log_in) == 1)
			
			{
				$row = mysqli_fetch_assoc($Log_in);
				
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['first_name'] = $row['first_name'];
				$_SESSION['last_name'] = $row['last_name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['user_id'] = $row['user_id'];
				
				ob_flush();
				
				header('location:blog.php');
				//$first_name = $row['first_name'];
				//echo  $first_name;
				
				//echo '<span class="label label-success">Log in Successfull</span>';
				}
				else
				{
					echo '<span class="label label-danger">Log in detail incorrect</span>';
					}
			}
			else
			{
				echo '<span class="label label-danger">Pls fill in the empty fields. Thank you!</span>'; 
			}
				
			}
?>
		<form action="" method="post">
			<h2>Login Now
				<i class="fas fa-level-down-alt"></i>
			</h2>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-user"></i>
					E-mail
				</label>
				<input placeholder="Email" name="email" id="email" type="text" required="">
			</div>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-unlock-alt"></i>
					Password
				</label>
				<input placeholder="Password" name="password" id="password" type="password" required="">
			</div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>Stay Signed In</span>
						</label>
					</li>
					<li>
						<a href="index.php">Forgot Password?</a>
					</li>
				</ul>
			</div>
			<!-- //checkbox -->
			<input type="submit" name="login" value="Log In">
            </form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>&copy; 2018 Mr. Chef. All rights reserved | Design by zaarab
		</p>
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="login/js/jquery-3.3.1.min.js"></script>
	<!-- //Jquery -->

	<!-- effect js -->
	<script src="login/js/canva_moving_effect.js"></script>
	<!-- //effect js -->

</body>

</html>