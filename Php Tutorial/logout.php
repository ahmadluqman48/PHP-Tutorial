<?php
session_start();
echo '<script type="text/javascript">alert("Logout Success")</script>';
session_destroy();

header("Location: login.php");
exit;
?>