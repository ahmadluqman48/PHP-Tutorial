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
<p style="font-size:175%;"> <strong> REGISTRATION </strong></p><br>
<form action="" method="POST"><p>
USERNAME : <input type="text" name="username" placeholder="Enter your username"><br><br>
PASSWORD : <input type="password" name="password" placeholder="Enter your password"><br><br>
<input type="submit" name="register" value="Sign Up"></p>
</form>
</body>
</html>
<?php
}
include('connection.php');
if (isset($_POST['register']))
{
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
if ($username == '' || $password == '')
{
$error = 'ERROR: Please fill in all required fields!';
renderForm($name, $password, $error);
}
else
{
mysqli_query($connection, "INSERT INTO data (username, password) VALUES ('$username', '$password')");
header("Location: login.php");
}
}
else
{
renderForm('','','');
}
?>