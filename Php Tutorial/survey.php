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
p {
	color:white;
	font-size:125%;
}
</style>
</head>
<body background="3.jpeg">
<h1 style="font-size:300%; color:white;"><b> PHP TUTORIALS </b></h1>

<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="topic.php">TOPICS</a></li>
  <li><a href="quiz.php">QUIZ</a></li>
  <li style="background-color:#0000FF;"><a href="survey.php">FEEDBACK</a></li>
</ul>
<div align="right"><a style="color: skyblue;" href="logout.php">LOG OUT</a> <a style="color: skyblue;" href="changepass.php"> CHANGE PASSWORD</a></div>
<h1 style="font-size: 200%; background-color: #FFFF00;">FEEDBACK</h1><br>
<form action="display.php" method="POST">
<p style="background-color: #000000;"> Thank you for visiting our website and please come visit us again if you have any comment or feedback.<br>
 Please tell or contact us for more information so we can improved our website in future.</p>
<textarea type="textarea" name="comment" rows="15" cols="50"></textarea><br><br>
<input type="submit" name="submit comment" value="Send Feedback">
</form>
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
	echo"<strong> You're visitor No. ". $counter . "</strong >";
	$handle = fopen("counter.txt", "r" );;
	fclose ($handle);
}
?> 
</p>
</body>
</html>