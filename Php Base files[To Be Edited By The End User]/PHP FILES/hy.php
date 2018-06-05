
<?php

$host="localhost";
$user="root";
$password="";
$db="cdcol";
mysql_connect($host,$user,$password);
$con=mysqli_connect("localhost","root","");
mysql_select_db($db);
if(isset($_POST['username']))
{
$uname=$_POST['username'];
$password=$_POST['password'];
#copied
/*$s= "insert into demo (User,Pass) values('$uname','$password')" ;
if(!mysqli_query($con,$s))
{
	echo "not insert";
}
else
{
	echo "inserted";
}
$sql="select * from demo where user='".$uname."' AND Pass= '".$password."' " ;
$result=mysql_query($sql);
if(mysql_num_rows($result)==1)
{
  echo 'CONNECTED';
exit();
}
else
{
echo 'DISCONNECTED';
}*/
}
if(!$con)
{
	echo 'not connected';
}
if(!mysqli_select_db($con,'cdcol'))
{
	echo 'database not selected';
}
$name = $_POST['username'];
$pass = $_POST['password'];

$sql = "insert into demo(User,Pass) values('$name','$pass')";
if(!mysqli_query($con,$sql))
{
	echo 'not insert';
}
else
{
	echo 'inserted';
}
/* new database select command check for invalid users*/

/*$user =$_POST['username'];
$pass =$_POST['password'];

$user = stripcslashes($user);
$pass = stripcslashes($pass);
$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);

mysql_connect("localhost","root","");
mysql_select_db("cdcol");
$result = mysql_query("select * from demo where User='$user' AND Pass='$pass'");
$row = mysql_fetch_array($result);
if($row['User'] == $user && $row['Pass'] == $pass )
{
	echo"inside";
}
else
{
	echo "failed";
}*/
?>
<!DOCTYPE HTML>
<html>
<head>
<body>


<form method="POST" action="hy.php">

<p> username </p>

<input type="text" placeholder="username" name="username">

<p> password </p>

<input type="password" placeholder ="password" name="password">

<input type="submit" name="submit" value="LOGIN">
</form>

</body>
</head>
</html>
