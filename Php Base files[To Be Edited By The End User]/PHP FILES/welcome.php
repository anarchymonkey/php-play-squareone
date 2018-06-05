<?php
session_start();
?>

<button type="logout" name="logout">logout</button>
<?php

if(isset($_POST['logout']))
{
  header("location:login.php");

}
?>
