<?
function check ($usname,$ustitle,$ustext){

if (!empty ($_POST['ok']))
{

trim ($usname); trim ($ustitle) ; trim ($ustext);
if ( $usname == "" || $ustitle == "" || $ustext ==""){return 2;}
else { 
$ctime = mysql_real_escape_string(date ("d-m-Y H:i:s"));
$usname = mysql_real_escape_string(htmlspecialchars($usname));
$ustitle = mysql_real_escape_string(htmlspecialchars($ustitle));
$ustext = mysql_real_escape_string(htmlspecialchars($ustext));
mysql_query("INSERT INTO articles (time,title,content,name) VALUES ('$ctime', '$ustitle','$ustext','$usname')");
return 3;
}
}return false;
}

?>