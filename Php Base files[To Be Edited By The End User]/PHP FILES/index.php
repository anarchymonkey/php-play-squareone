
<!DOCTYPE HTML>
<style>
<?php include 'C:\xampp\htdocs\i\index.css';
?>
</style>
<?php
 session_start();
?>


<HTML>
	<HEAD>
		<TITLE>
		TECHNOPHILE
		</TITLE>
	</HEAD>
<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\i\index.css">
<body background="background1.jpg">
	<!--designing the nav bar-->
  <?php
  if($_SESSION['username'])
  {
  echo '<div class="nav-bar1"><h3>welcome '.$_SESSION['username']. ' to Square One</h3></div>';
}
else {
    echo '<div class="nav-bar1"><h3>welcome to Square One</h3></div>';
}
  ?>
	<div class="nav-bar" method="POST">
    <a class="active" href="http://localhost/i/login.php">Login Here</a>
	   <a href="aboutus.php">About us</a>
		 <a href="menu.php">Delicacies</a>
     <a href="index.php">Home</a>
		</div>


<!-- this is for the square one logo-->
<div class="main-logo">
<p><img src="SQUAREONE.gif"> </p>
</div>
<!-- this is for the learn more portion of the page-->

<div class="connect">
	<button type="button" class="LM" name="LEARN MORE"><a href="http://localhost/order/order.php">ORDER NOW!!</a></button>
</div>

<div class="footer">
	<footer id="foot">
		<a href="#contact us">contact us</a>
		<a href="#github">visit us on github</a>
    <?php
    echo '<a class="active" href="http://localhost/i/logout.php"> Logout </a>';
    ?>
	</footer>
</div>

</body>
   </HTML>
