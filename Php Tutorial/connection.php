<?php
$connection = mysqli_connect("localhost", "root", "") or die ("Could not connect to server ... \n");
$db = mysqli_select_db($connection,'user') or die ("Could not connect to database ... \n");
?>