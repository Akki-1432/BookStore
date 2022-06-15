<?php
session_start();
ob_start();




if (!isset($_SESSION['admin_email'])) {
	echo "<script>";
	echo "window.location.href='../index.php';";
	echo "</script>";
}

?>

<?php
error_reporting(E_ALL);
ini_set('display_error',1);
?>