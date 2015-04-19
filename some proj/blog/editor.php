<?
include ('view.php');
include ('functions/dbconfig.php');
include ('functions/dbconnect.php');
include ('functions/model.php');

if (!empty($_POST)){
header("location:editor.php?id=" .$_GET[id] ."&news=". $_GET[news] ."&idd=ok");
}

echo view_page ("templates/header.php",array(title=>'Редактор',cpage=>'editor'));
echo view_page ("templates/v_editor.php");

//echo $i_header;


?>


