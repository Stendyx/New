<h2>Галлеря фото:</h2>
<p>Обычный вид | <a href="index.php?id=2">Табличный вид</a></p>
<?php $nn = "hidden"; if (mysql_num_rows(mysql_query("SELECT * FROM gallery ORDER BY id_gal DESC"))>0) $nn="visible";?>
<div style="border:3px solid grey; visibility:<?=$nn?> ">

<?php 
$sort = mysql_query("SELECT * FROM gallery ORDER BY id_gal DESC LIMIT 4");

while ($row = mysql_fetch_array($sort))
{
$qid = $row[id_gal];
echo "<a href=\"templates/view3.php?qid=$qid\"><img src=\"$row[url]\" width=\"200px\" height=\"200px\"/></a>";

}
?>
</div>