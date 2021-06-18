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
<body background="2.jpg">
<h1 style="font-size:300%; color:white;"><b> PHP TUTORIALS </b></h1>
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="topic.php">TOPICS</a></li>
  <li style="background-color:#0000FF;"><a href="quiz.php">QUIZ</a></li>
  <li><a href="survey.php">FEEDBACK</a></li>
</ul>
<div align="right"><a style="color: skyblue;" href="logout.php">LOG OUT</a> <a style="color: skyblue;" href="changepass.php"> CHANGE PASSWORD</a></div>
<h1 style="font-size: 200%; background-color: #FFFF00;">QUIZ</h1>
<form action="answer.php" method="POST">
<p>1. What is PHP? </p><p>
<Input type="Radio" name="answer1" value="A1"><b>A.</b> PHP is an acronym for "PHP: Hypertext Preprocessor.<br>
<Input type="Radio" name="answer1" value="B1"><b>B.</b> PHP stands for Cascading Style Sheets.<br>
<Input type="Radio" name="answer1" value="C1"><b>C.</b> PHP lets you access and manipulate databases.<br>
<Input type="Radio" name="answer1" value="D1"><b>D.</b> PHP is an ANSI (American National Standards Institute) standard.<br></p>
<p>2. What Can PHP Do? </p><p>
<Input type="Radio" name="answer2" value="A2"><b>A.</b> Can create, open, read, write, delete, and close files on the server.<br>
<Input type="Radio" name="answer2" value="B2"><b>B.</b> Can set permissions on tables, procedures, and views.<br>
<Input type="Radio" name="answer2" value="C2"><b>C.</b> Can change HTML Attributes.<br>
<Input type="Radio" name="answer2" value="D2"><b>D.</b> Define styles for your web pages.<br></p>
<p>3. Why PHP? </p><p>
<Input type="Radio" name="answer3" value="A3"><b>A.</b> Uses the method to "find" an HTML element (with id="demo") and changes the element content (innerHTML) to "Hello JavaScript".<br>
<Input type="Radio" name="answer3" value="B3"><b>B.</b> To use a server-side scripting language, like PHP or ASP.<br>
<Input type="Radio" name="answer3" value="C3"><b>C.</b> Runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)<br>
<Input type="Radio" name="answer3" value="D3"><b>D.</b> An RDBMS database program (i.e. MS Access, SQL Server, MySQL)<br></p>
<p>4. What do we need to install the PHP? </p><p>
<Input type="Radio" name="answer4" value="A4"><b>A.</b> Web server only.<br>
<Input type="Radio" name="answer4" value="B4"><b>B.</b> PHP only.<br>
<Input type="Radio" name="answer4" value="C4"><b>C.</b> MySQL only.<br>
<Input type="Radio" name="answer4" value="D4"><b>D.</b> All above.<br></p>
<p>5. What is the second step to install the PHP. </p><p>
<Input type="Radio" name="answer5" value="A5"><b>A.</b> Find a web host with PHP and MySQL support.<br>
<Input type="Radio" name="answer5" value="B5"><b>B.</b> Install a web server on your own PC.<br>
<Input type="Radio" name="answer5" value="C5"><b>C.</b> Install PHP and MySQL.<br>
<Input type="Radio" name="answer5" value="D5"><b>D.</b> Install MySQL Workbench.<br></p>
<input type="submit" name="submitquiz" value="SUBMIT">
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