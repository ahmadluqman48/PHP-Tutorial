<?php
function renderForm($id, $username, $oldpassword, $newpassword, $error)
{
?>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111111;
}
p{
	text-align: center;
	color: white;
	font-size:125%;
}
</style>
</head>
<body background="2.jpg">
<?php
if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<h1 style="font-size:300%; color:white;"><b> PHP TUTORIALS </b></h1>
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="topic.php">TOPICS</a></li>
  <li><a href="quiz.php">QUIZ</a></li>
  <li><a href="survey.php">FEEDBACK</a></li>
</ul>
<h1 style="text-align: center; font-size: 200%; background-color: #FFFF00;">CHANGE PASSWORD</h1><br>
<form action="" method="POST"><p>
Username : <input type="text" name="username"><br>
Old Password : <input type="text" name="oldpw"><br>
New Password : <input type="text" name="newpw"><br>
<input type="submit" name="cngpw" value="Confirm Change"></p>
</form>
<div style="color:white;"align="right"> 
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
	echo"<strong> You're visitor No. ". $counter . "</strong >";
	$handle = fopen("counter.txt", "r" );
	fclose ($handle);
}
?> </div>
</body>
</html>
<?php
}
include('connection.php');
if (isset($_POST['cngpw']))
{
$id = $_GET['id'];
$username = mysqli_real_escape_string($connection, $_POST['username']);
$oldpassword = mysqli_real_escape_string($connection, $_POST['oldpw']);
$newpassword = mysqli_real_escape_string($connection, $_POST['newpw']);
if ($username == '' || $oldpassword == ''|| $newpassword == '')
{
$error = 'ERROR: Please fill in all required fields!';
renderForm($id, $username, $oldpassword, $newpassword, $error);
}
else
{
mysqli_query($connection, "UPDATE data SET password='$newpassword' WHERE username='$username' AND password='$oldpassword'");
header("Location: home.php?username='$username'");
}
}
else 
{
renderForm('','','','','');
}
?>