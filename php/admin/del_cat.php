<?php
	
	include 'config.php';
	$id = $_GET['delid'];
	$query = "DELETE FROM category WHERE cat_id = $id";

	$t = mysqli_query($conn, $query);

	if($t == true)
	{
		echo "<script> alert('data deleted')</script>";
 			echo "<script> window.location.href = 'view_cat.php' </script>";
	}
	else
 	{
 			echo "<script> alert('data not deleted')</script>";
 	}
?>