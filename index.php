<?php
echo "Server Name => ".$_SERVER['SERVER_NAME']."<br>";
echo "User IP adress => ".$_SERVER['REMOTE_ADDR']."<br>";
echo "User Agent => ".$_SERVER['HTTP_USER_AGENT']."<br>";

session_start();
$_SESSION['name'] = "Laroche";
$_SESSION['firstName'] = "Alexis";
$_SESSION["age"] = "26";

?>
<a href="page2.php">Exercice 2</a>
