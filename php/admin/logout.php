<?php
session_start();
unset($_SESSION['admin_email']);
session_destroy();
echo '<script type="text/javascript">';
echo 'window.location.href="./index.php";';
echo '</script>';
?>