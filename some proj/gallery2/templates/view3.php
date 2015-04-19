<? include ("../main.php"); 
$qid =$_GET["qid"];
?>
<div style="float:left; padding:20px"/>

<h3><? 

if ($_SERVER["HTTP_REFERER"]=="http://stendyx/7/gallery2/index.php?id=2")
{echo "<a href=\"../index.php?id=2\">Назад</a>";}
else
{echo "<a href=\"../index.php\">Назад</a>";}
?>

</h3></br>
<h3>Фотография номер <?=$qid?></h3>
</br>

<? 
include("../functions/connectdb.php");
$sort = mysql_query("SELECT * FROM gallery WHERE id_gal=$qid");

$q = mysql_fetch_array($sort);

echo "<img src=\"../$q[url]\" width=\"800px\"/>";?>
</div>
