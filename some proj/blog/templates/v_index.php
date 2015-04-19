
<?
if (!empty($_GET[news])):?>
<h3><a class="a2" href="index.php?id=<?=$_GET[id];?>">Назад </a></h3>
<div style="width:900px ; word-wrap:break-word;">
<? $q = mysql_query("SELECT * FROM articles WHERE id_article=". $_GET[news] . "");  $row = mysql_fetch_array($q); ?>
<p><b>Номер новости:</b>  <?=$row['id_article'];?></p>
<p><b>Дата:</b> <?=$row['time'];?></p>
<p><b>Имя:</b> <?=$row['name'];?></p>

<p><b>Заголовок:</b> <?=$row['title'];?></p></br>
<p><b>Текст:</b> <?=$row['content'];?></div>


<?else:
echo "<h2>Новости:</h2></br>";
 include ("/functions/show_news.php");
  endif; ?>


</body>
</html>





</body>
</html
