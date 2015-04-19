<?php
include("functions/connectdb.php");

delete_gallery();


if (isset($_GET)){
$link= "templates/view1.php";
if ($_GET["id"]==1)
{$link= "templates/view1.php";}
elseif($_GET["id"]==2)
{$link= "templates/view2.php";}
}


if ($_SERVER["REQUEST_METHOD"]=="POST")
{

header("location:index.php?id=1");
if($_GET["id"]==2)
{header("location:index.php?id=2");}}




if (!empty($_POST) || !empty($_FILES) ){
$dfile = $_FILES["pict"];
$del = $_POST["del"];
$picname = trim($dfile['name']);
if ($picname=="" || !preg_match("/(\w+\.jpg)|(\w+\.jpeg)|(\w+\.png)/",$picname))
echo "Ошибка загрузки , проверьте, что формат файла - картинка ";
else{
upload_file($picname,$dfile);
get_url($picname);
}}




include("main.php");







function delete_gallery(){
if (!empty($_POST["del"] )){
mysql_query("DELETE FROM gallery");
if (file_exists('img/'))
{foreach(glob('img/*') as $i) unlink($i);}
if ($_GET["id"]==1)
{header("location:index.php?id=1");}
elseif($_GET["id"]==2)
{header("location:index.php?id=2");}


//header("location:index.php");
}
}

function get_url($picname){

$urlname= "img/$picname";
mysql_query("INSERT INTO gallery(url) VALUES ('$urlname')") or die (mysql_error());
}

function upload_file($picname,$dfile){

if (file_exists("/img/"))
copy($dfile['tmp_name'],"img/". $picname);

else{
mkdir("/img/", 0777);
return;
}

}




?>