<?
include ('view.php');
include ('functions/dbconfig.php');
include ('functions/dbconnect.php');
include ('functions/model.php');




if (check($_POST['username'],$_POST['usertitle'],$_POST['usertext'])==3)
{header("location:add.php?id=2");}

echo view_page ("templates/header.php",array(title=>'Добавление новости',cpage=>'add'));

echo view_page ("templates/v_add.php");




$usname = $_POST['username'];
$ustitle= $_POST['usertitle'];
$ustext= $_POST['usertext'];

if (!empty($_POST['del'])){
$usname = "";
$ustitle = '';
$ustext=""; 
}






?>


