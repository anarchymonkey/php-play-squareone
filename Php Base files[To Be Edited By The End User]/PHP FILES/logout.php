<?php
session_start();
unset($_SESSION['username']);
session_destroy();
echo '<script> successfully logged out';

header("Location:login.php");
 ?>
