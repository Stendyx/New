<?php
$usname = $_POST["username"];
$usmsg = $_POST["usertext"];
$del= $_POST["del"];
connect_base();
$usname = trim($usname);
$usmsg = trim($usmsg);

if (!empty($del)){ 
mysql_query("DELETE FROM messages");
header("Location: index.php");
}

if (!empty($_POST)){
header("Location: index.php");

}

show_form();

if ($usname !== "" && $usmsg !== ""  ){
write();
messages(); 
exit();}
else messages();

function show_form(){
echo '<form method="post" action="" >' ;
echo '<input type="text" name="username" maxlength="32" placeholder="Ваше имя" /></br>' ;
echo '<textarea name="usertext" maxlength="255" rows="5" cols="40"  placeholder="Ваше сообщение" ></textarea>' ;
echo '</br>' ;
echo '<input type="submit"/></br></form>' ;
echo '<form action="" method="post"><input type="submit" name="del" value="Удалить все сообщения" /></form>' ;
}
function write (){
$datee= date("H:i:s d-m-Y");
global $usname;
global $usmsg;
mysql_query("INSERT INTO messages (dataa,name,msg) VALUES ('$datee','$usname','$usmsg')") or die ("Erroooorrrr");
}
function connect_base(){
setlocale(LC_ALL, 'ru-RU.cp1251');
mysql_connect ("localhost","root","") or die ("error");
mysql_query ('SET NAMES cp1251');
mysql_select_db("stendyx") or die ("No db");
}
function messages(){
$q = mysql_query("SELECT * FROM messages ORDER BY dataa DESC") or die (mysql_error());
for ($i=0;$i<mysql_num_rows($q);$i++)
{
$f = mysql_fetch_array($q);
echo "<p> $f[dataa] </p><p>Ваше имя: $f[name]</p>";
echo "<p>Комментарий:</p><p>$f[msg]</p></br></br>";
}
}
?>

