<?php
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
			<h2 class="text-center mb-30">Login</h2>
			<form method="POST" action="#">
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" name="admin_email" placeholder="Username">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" name="admin_password" placeholder="**********">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							
								<!-- use code for form submit -->
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" name="signin" value="Sign In">
							
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

if (isset($_POST['signin'])) 
{
	$query= "select * from admin where admin_email='".$_POST['admin_email']."' and admin_password='".$_POST['admin_password']."'";
	 $res=mysqli_query($conn,$query)or die (mysqli_error($conn));

	 if(mysqli_num_rows($res) > 0)

      {
      	$row=mysqli_fetch_array($res);
      	extract($row);
      	$_SESSION['admin_email']=$row['email'];

       echo "<script>";
       echo "alert ('login succesfully');";
       echo "window.location.href='dashboard.php';";
	 	echo "</script>";

      }

      else
      {
      	 echo "<script>";
      	 echo "alert('email or password is invalid');";
      	 echo "window.location.href='index.php';";
      	 echo "</script>";
      }
}
?>