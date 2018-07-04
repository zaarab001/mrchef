<?php
if(isset($_POST['register']))
		{
			$email= $_POST['email'];
			$first_name= $_POST['first_name'];
			$last_name= $_POST['last_name'];
			$gender= $_POST['gender'];
			$password= md5($_POST['password']);
			$address= $_POST['address'];
			$c_password= md5($_POST['c_password']);
			$phone= $_POST['phone'];
			
			if(!(empty($email)) && !(empty($first_name)) && !(empty($last_name)) && !(empty($password)) && !(empty($gender)) && !(empty($address)) && !(empty($c_password)) && !(empty($phone)) )
			{
				
				$check_email = mysqli_query($dbC, "SELECT * FROM user WHERE email = '$email'");
					if(mysqli_num_rows($check_email)==1)
					{//start of checking if email exist
						echo '<span class="label label-danger">Sorry Email used by another user</span>';
					}//end of checking if email exist
					
					else{//strat of else if email exist
					
					
					
					
					
				$user_reg = mysqli_query($dbC, "INSERT INTO user
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
											VALUES(
											'$email',
											'$password',
											'$first_name',
											'$last_name',
											'$gender',
											'$phone',
											'$address',
											Now()
											)") or die (mysqli_error());//trader user info
											if($user_reg)
											{
												echo '<span class="label label-success">Registeration Successfull</span>';
											}
											else
											{
												echo '<span class="label label-danger">Registeration not Successfull</span>';
											}
							
							
							
							}//end of else if email exist
											
				
				}//end of if input fields not empty
				else
				{
					echo 'Fill in all the asteric sign*';
					}
			
		}
  