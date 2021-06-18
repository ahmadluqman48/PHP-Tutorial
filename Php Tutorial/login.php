<?php
function renderForm($name, $password, $error)
{
?>
<html>
<head>
<style>
p{
	text-align: center;
	color: white;
	font-size:125%;
}
</style>
</head>
<body background="1.jpg">
<?php
if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<h1 style="font-size:300%; color: white;"><b> PHP TUTORIALS </b></h1><br><br>
<p style="font-size:175%;"> <strong> LOGIN </strong></p><br>
<form action="" method="POST">
<p>USERNAME : <input type="text" name="username" placeholder="Enter your username"><br>
PASSWORD : <input type="password" name="password" placeholder="Enter your password"><br><br>
<input type="submit" name="login" value="LOGIN"><br></p>
</form>
<p style="background-color: black;">IF YOU DON'T HAVE ACCOUNT, CLICK <a style="color: skyblue;" href="register.php">HERE</a> TO REGISTER.</p>
<p align="right"> 
<?php 
$handle = fopen("counter.txt", "r");
if(!$handle)
{
	echo "could not open the file";
}
else
{
	$counter = (int) fread($handle,20);
	fclose ($handle);
	$counter++;
	echo"<strong> You're visitor No. ". $counter . "</strong >";
	$handle = fopen("counter.txt", "w" );
	fwrite($handle,$counter);
	fclose ($handle);
}
?> 
</p>
<?php
}
include ('connection.php');
if(empty($_SESSION)){
   session_start();
if (isset($_POST['login']))
{
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$result = mysqli_query($connection, "SELECT * FROM data WHERE username='$username' AND password='$password'");
$_SESSION['data'] = mysqli_fetch_assoc($result);
$Username = $_SESSION['data']['username'];
$Password = $_SESSION['data']['password'];
if(($username != $Username) || ($password != $Password))
{
echo '<script type="text/javascript">alert("Login Failed. Try Again")</script>';	
}
else
{
echo '<script type="text/javascript">alert("Login Success")</script>';
header("Location: home.php?username=$Username");
}
}
else
{
renderForm('','','');
}
}
else{
	echo "session already started";
}
?>
</body>
</html>