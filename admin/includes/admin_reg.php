  <?php
if(isset($_POST['register']))
		{
			$user_name= $_POST['user_name'];
			$first_name= $_POST['first_name'];
			$last_name= $_POST['last_name'];
			$password= $_POST['password'];
			
			if(!(empty($user_name)) && !(empty($first_name)) && !(empty($last_name)) && !(empty($password)) )
			{
				
				$check_user = mysqli_query($dbC, "SELECT * FROM admin WHERE user_name = '$user_name'");
					if(mysqli_num_rows($check_user)==1)
					{//start of checking if email exist
						echo '<span class="label label-danger">Sorry User name used by another Admin</span>';
					}//end of checking if email exist
					
					else{//strat of else if email exist
					
					
					
					
					
				$admin_reg = mysqli_query($dbC, "INSERT INTO admin
											(
											user_name,
											first_name,
											last_name,
											password
											)
											VALUES(
											'$user_name',
											'$first_name',
											'$last_name',
											Now()
											)") or die (mysqli_error());//Admin info
											if($admin_reg)
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
?>