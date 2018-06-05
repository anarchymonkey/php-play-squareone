<style>
<?php
include 'C:\xampp\htdocs\i\signup.css';
 ?>

 </style>

 <?php
 //session has been started
session_start();
 /* All the values have to be entered */
 $_SESSION['message']='';
 $host="localhost";
 $user="root";
 $password="";
 $db="cdcol";

 mysql_connect($host,$user,$password);
 $con=mysqli_connect("localhost","root","","cdcol");
 mysqli_select_db($con,$db);
 if(isset($_POST['submit']))
 {
	 $name=$_POST["username"];
	 $pass=$_POST['password']; //md5 encription
	 $em=$_POST['email'];
	 $confpass=$_POST['password2'];
 if($pass==$confpass)
 {
 	$sql= "insert into signup(User,Pass,Email) values('$name','$pass','$em')";
 	mysqli_query($con,$sql);
 	$_SESSION['message']="YOU ARE LOGGED IN";
  header("location:index.php");
 	exit();
 }
 else {
 	$_SESSION['message']="These two passwords dont match";
 	echo '<script> alert("failed") </script>';
 }
}
 /* if not connected and if connected
 if(!$con)
 {
 	echo 'not connected';
 }
 else {
 	echo 'CONNECTED';
 }
 if(!mysqli_select_db($con,'cdcol'))
 {
 	echo 'database not selected';
 }
 else {
 	echo 'database entered';
}*/
 ?>
 <body background="signuplogo0.jpg">

	 <div class="signup-page">
		 <h2>  Sign Up </h2>
      <form method="POST" action="signup.php">
			<p>Email</p>
			<input type="input" name="email" placeholder="enter a valid email" required>
			<p>Username</p>
			<input type="input" name="username" placeholder="please enter a username"required>
			<p> Password</p>
			<input type="password" name="password" placeholder="Enter a password"required>
			<p> Retype Password</p>
			<input type="password"  name="password2" required>
      <p> Branch </p>
			<input type="Branch"  name="branch" placeholder="Select your stream">
			<input type="submit" name="submit" required>

			</form>

		</div>
</body>
