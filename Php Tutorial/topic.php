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
table
{
width: 100%
}
th,td
{
text-align: center; 
padding: 5px;
}
th
{
font-size: 150%;
background-color: #FFFF00;
}
h2{
	color:white;
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
  <li style="background-color:#0000FF;"><a href="topic.php">TOPICS</a></li>
  <li><a href="quiz.php">QUIZ</a></li>
  <li><a href="survey.php">FEEDBACK</a></li>
</ul>
<div align="right"><a style="color: skyblue;" href="logout.php">LOG OUT</a> <a style="color: skyblue;" href="changepass.php"> CHANGE PASSWORD</a></div>
<table>
<tr>
 <th>Topic 1 : Intro to PHP </th></tr><tr>
 <td><p>PHP scripts are executed on the server.</p>
<h2>What You Should Already Know?</h2>
<p>Before you continue you should have a basic understanding of the following:<br><br>
- HTML<br>
- CSS<br>
- JavaScript<br></p>
<h2>What is PHP?</h2>
<p>- PHP files can contain text, HTML, CSS, JavaScript, and PHP code<br>
- PHP code are executed on the server, and the result is returned to the browser as plain HTML<br>
- PHP files have extension ".php"<br></p>
<h2>What Can PHP Do?</h2>
<p>- PHP can generate dynamic page content<br>
- PHP can create, open, read, write, delete, and close files on the server<br>
- PHP can collect form data<br>
- PHP can send and receive cookies<br>
- PHP can add, delete, modify data in your database<br>
- PHP can be used to control user-access<br>
- PHP can encrypt data<br></p>
<p><b> (With PHP you are not limited to output HTML. You can output images, PDF files, and even Flash movies. You can also output any text, such as XHTML and XML.)</b></p>
</td></tr>
<tr>
 <th>Topic 2 : Installation </th></tr><tr>
 <td><h2>What Do I Need?</h2>
<p><b>To start using PHP, you can:</b> </p>
<p>- Find a web host with PHP and MySQL support.<br>
- Install a web server on your own PC, and then install PHP and MySQL.</p>
<h2>Use a Web Host With PHP Support</h2>
<p>- If your server has activated support for PHP you do not need to do anything.<br>
- Just create some .php files, place them in your web directory, and the server will automatically parse them for you. <br>
- You do not need to compile anything or install any extra tools. <br>
- Because PHP is free, most web hosts offer PHP support.</p>
<h2>Set Up PHP on Your Own PC</h2>
<p><b>However, if your server does not support PHP, you must:</b></p>
<p>- install a web server.<br>
- install PHP.<br>
- install a database, such as MySQL.</p>
 </td>
</tr>
</table>
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