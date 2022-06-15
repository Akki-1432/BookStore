
<?php
include 'start.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="vendors/images/login-img.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">Change Passsword</h2>
			<form method="POST" action="#">
				<label>Old Password</label>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" name="old_password" placeholder="***********">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>

				<label>New Password</label>

				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" name="new_password" placeholder="**********">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>

				<label>Confirm Password</label>

				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" name="cnew_password" placeholder="**********">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							
								<!-- use code for form submit -->
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" name="save" value="save">
							
							<!-- <a class="btn btn-outline-primary btn-lg btn-block" href="dashboard.php">Sign In</a> -->
						</div>
					</div>
					<div class="col-sm-6">
						<div class="forgot-password padding-top-10"><a href="forgot-password.php">Forgot Password</a></div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>

<?php
include 'config.php';

if (isset($_POST['save'])) 
{
      	extract($_POST);
      	$query="select * from admin where email='".$_SESSION['admin_email']."' and password='".$_POST['old_password']."'";
      	$res=mysqli_query($conn,$query) or die (mysqli_error($con));
      	if (mysqli_num_rows($res) > 0) 
      	{
      		    if($_POST['new_password']==$_POST['cnew_password'])
      	    {

 
      			$query="update admin set password ='".$_POST['new_password']."'";
      				$t =mysqli_query($conn,$query);
      				if ($t)
      				{
      					echo "<script>";
      					echo "alert('Password changed');";
      					echo "window.location.href='dashboard.php';";
	 	                echo "</script>";
      				}
      				else
      				{
      					echo "<script>";
      					echo "alert('password not changed');";
      					echo "</scrpit>";
      				}
      		}
      				else
      				{
      					echo "<scrpit>";
      					echo "alert('confirm password is not changed');";
      					echo "</script>";
                	}
      	}
   }


?>