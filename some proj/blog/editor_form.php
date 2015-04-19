<?


$edit= mysql_query("SELECT * FROM articles WHERE id_article=". $_GET[news] . "");
$ed= mysql_fetch_array($edit);
$lasttitle= $ed[title];
$lasttext = $ed[content];
$newart=$_POST[editarticle];
$newtext=$_POST[edittext];

if (!empty($_GET[idd]))
{
echo "Новость успешно сохранена!";

}

if (!empty($_POST[ok]))
{
mysql_query("UPDATE articles SET title='$newart',content='$newtext' WHERE id_article=". $_GET[news] . "");
//echo "Новость успешно отредактирована!";
//header("location:..editor.php?id=" .$_GET[id] ."&news=". $_GET[news] ."&idd=ok");
}




?>

<h3><a class="a2" href="editor.php?id=<?=$_GET[id];?>">Назад </a></h3>

<div style="width:900px ; word-wrap:break-word;">


<form method="post" action="" >
Заголовок:</br><textarea type="text" name="editarticle" cols="80" rows="2"  ><?=$lasttitle;?></textarea></br></br>
Текст новости:</br><textarea name="edittext"  cols="100" rows="20" ><?=$lasttext;?></textarea></br>
<input type="submit" name="ok" value="Сохранить изменения" />


</form>
</div>

<?


?>
