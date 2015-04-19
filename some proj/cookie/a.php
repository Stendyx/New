<?php
session_start();

if (!isset($_SESSION["username"]) && isset($_COOKIE["username"]))
$_SESSION["username"] = $_COOKIE["username"];


$username=$_SESSION["username"];

if (!$username && !$_POST["pass"]==333)
{header("Location: index.php");
exit();
}








?>

<p> Здравствуйте <?php echo $username; ?></p> 
<p>Нажата ли кнопка - <? echo $_COOKIE["username"]; ?> </p>
<p>SECRET VIDEO</p>
<iframe width="420" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
<p><a href="index.php">Выход</a></p>