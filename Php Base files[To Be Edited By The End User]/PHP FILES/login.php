<style>
<?php include 'C:\xampp\htdocs\i\loginpage.css'; ?>
</style>
<?php
session_start();

$host="localhost";
$pass="";
$root="root";
$db="cdcol";

mysqli_connect($host,$root,$pass);
$conn=mysqli_connect("localhost","root","","cdcol");

/* code for checking the connection */
mysql_select_db($db);
/* connected users */
if(isset($_POST['submit']))
{
	$pass=$_POST['password'];
	$name=$_POST['username'];
$sql= "select * from signup";
mysqli_query($conn,$sql);
mysql_connect("localhost","root","");
mysql_select_db("cdcol");
$result = mysql_query("select * from signup where User='$name' AND Pass='$pass'");
$row = mysql_fetch_array($result);
$_SESSION['username']=$name;
if($row['User'] == $name && $row['Pass'] == $pass )
{
	echo $name;
	header("location:index.php");
}else
{
	echo '<script> alert("invalid username entered,please login with correct credentials") </script>';
}

}
 ?>
<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\i\loginpage.css">

<body background="login2.jpg">
<div class="loginpage">
  <img src="avatar.png" class="userlogin"/>
  <h2> Login here </h2>
  <form method="POST" action="login.php">
		<p>Username</p>
		<input type="text" placeholder="Enter username" name="username">
    <p> Password </p>
    <input type="password" placeholder="*********" name="password" required>
    <input type="submit" name="submit">
    <a href="#" id="forgotpass">forgot password?</a>
    <h4> New to this site? <a href="http://localhost/i/signup.php" id="signup">Sign up</a> here</h4>
  </form>
</div>
