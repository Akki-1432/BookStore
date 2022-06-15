<?php
	
	include 'config.php';
	$id = $_GET['delid'];
	$query = "DELETE FROM book WHERE book_id = $id";

	$t = mysqli_query($conn, $query);

	if($t == true)
	{
		echo "<script> alert('data deleted')</script>";
 			echo "<script> window.location.href = 'view_book.php' </script>";
	}
	else
 	{
 			echo "<script> alert('data not deleted')</script>";
 	}
?>