
<?
if (!empty($_GET[news])):?>
<h3><a class="a2" href="index.php?id=<?=$_GET[id];?>">����� </a></h3>
<div style="width:900px ; word-wrap:break-word;">
<? $q = mysql_query("SELECT * FROM articles WHERE id_article=". $_GET[news] . "");  $row = mysql_fetch_array($q); ?>
<p><b>����� �������:</b>  <?=$row['id_article'];?></p>
<p><b>����:</b> <?=$row['time'];?></p>
<p><b>���:</b> <?=$row['name'];?></p>

<p><b>���������:</b> <?=$row['title'];?></p></br>
<p><b>�����:</b> <?=$row['content'];?></div>


<?else:
echo "<h2>�������:</h2></br>";
 include ("/functions/show_news.php");
  endif; ?>


</body>
</html>





</body>
</html
