<?
include ('view.php');
include ('functions/dbconfig.php');
include ('functions/dbconnect.php');
include ('functions/model.php');


echo view_page ("templates/header.php",array(title=>'Главная страница',cpage=>'index'));
echo view_page ("templates/v_index.php");


?>


