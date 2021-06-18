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
	text-align: center;
	color:white;
	font-size:125%;
}
</style>
</head>
<body background="2.jpg">
<h1 style="font-size:300%; color:white;"><b> PHP TUTORIALS </b></h1>
<ul>
  <li style="background-color:#0000FF;"><a href="home.php">HOME</a></li>
  <li><a href="topic.php">TOPICS</a></li>
  <li><a href="quiz.php">QUIZ</a></li>
  <li><a href="survey.php">FEEDBACK</a></li>
</ul>
<div align="right"><a style="color: skyblue;" href="logout.php">LOG OUT</a> <a style="color: skyblue;" href="changepass.php"> CHANGE PASSWORD</a></div>
<h1 style="text-align: center; font-size: 200%; background-color: #FFFF00;">INTRODUCTION TO PHP</h1><br>
<p>*PHP is an acronym for "PHP:Hypertext Preprocessor"</p>
<p>*PHP is a widely-used,open source scripting language</p>
<p>*PHP scripts are executed on the server</p>
<P>*PHP is free to download and use</p> 
<p><b>(PHP is an amazing and popular language!)</b><br>
~ It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!<br> 
~ It is deep enough to run the largest social network(Facebook)! <br>
~ It is also easy enough to be a beginner's first server side language! </p>
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