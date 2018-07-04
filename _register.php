<?php
if(isset($_POST['register']))
				{
					$email = $_POST['email'];	
					$pass = md5($_POST['password']);	
					$c_pass = md5($_POST['c_password']);	
					$first_name = $_POST['first_name'];	
					$last_name = $_POST['last_name'];	
					$phone = $_POST['phone'];
					$gender = $_POST['gender'];	
					$address = $_POST['address'];
					
					if( !(empty($email))  && !(empty($first_name)) && !(empty($last_name)) && !(empty($pass)) && !(empty($c_pass)) && !(empty($phone)) && !(empty($gender)) && !(empty($address)) )
					{
						
						$check_email = mysqli_query($dbC, "SELECT * FROM users WHERE email = '$email'");
							if(mysqli_num_rows($check_email) == 1)	
							{// start of checking if email exist
								echo '<span class="label label-danger">Sorry You or Another person have already used this email address! </span>';
							}// end of checking if email exist
							
						else{ //start of else if email exist
						
							if ($pass != $c_pass)
							{
								echo '<span class="label label-danger">Sorry password not matched! </span>';
							}
							else{
								
							
						$user_reg = mysqli_query ($dbC, "INSERT into users
								
									(
									email,
									password,
									first_name, 
									last_name, 
									gender, 
									phone, 
									contact_address, 
									date_registered
									)
									
									VALUES (
									'$email', 
									'$pass', 
									'$first_name', 
									'$last_name', 
									'$gender',
									'$phone',
									'$address',
									Now()
									)") or die (mysqli_error());//student user reg
									
									if ($user_reg)
									{
										echo '<span class="label label-success">Registration Successful</span>';
									}
									else
									{
										echo '<span class="label label-danger">Registration Not successful please try again later</span>';	
									}
									
									
														
													
							}//end of checking password matching
						
						}//end of else if email exist
						
					
						
						
					}
					else
					{
						echo "Fill all fields with the asteric sign";	
					}
					
					
				}
 ?>