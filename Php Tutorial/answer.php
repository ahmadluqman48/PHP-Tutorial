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
  <li style="background-color:#0000FF;"><a href="quiz.php">QUIZ</a></li>
  <li><a href="survey.php">FEEDBACK</a></li>
</ul>
<div align="right"><a style="color: skyblue;" href="logout.php">LOG OUT</a> <a style="color: skyblue;" href="changepass.php"> CHANGE PASSWORD</a></div>
<p style="background-color: #000000;">
<?php
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer5'];
$totalCorrect = 0;
if ($answer1 == "A1") { $totalCorrect++; }
if ($answer2 == "A2") { $totalCorrect++; }
if ($answer3 == "C3") { $totalCorrect++; }
if ($answer4 == "D4") { $totalCorrect++; }
if ($answer5 == "D5") { $totalCorrect++; }
echo "$totalCorrect / 5 correct<br>";
$total = ($totalCorrect*2);
echo "<strong>YOU HAVE SCORED $total/10</strong>"
?></p>
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