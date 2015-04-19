<h2>Галлеря фото:</h2>
<p><a href="index.php?id=1">Обычный вид </a>| Табличный вид</p>

<?php $nn = "hidden"; if (mysql_num_rows(mysql_query("SELECT * FROM gallery ORDER BY id_gal DESC"))>0) $nn="visible";?>
<div>
<table border="0px solid grey;">
<?php




$sort=mysql_query("SELECT * FROM gallery ORDER BY id_gal DESC");
for ($i=0;$i<mysql_num_rows($sort);$i++)
{
if ($i%4===0) {echo "<tr>";}
$b  = mysql_fetch_array($sort);
$qid=$b['id_gal'];
echo "<td><a href=\"templates/view3.php?qid=$qid\"><img src=\"$b[url]\" width=\"200px\" height=\"200px\"/></a></td>";
if ($i%4===3) {echo "<tr>";}
}
echo "</table>";
?>


</div>