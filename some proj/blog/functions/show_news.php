<?php
$cid = ((!empty($_GET[id])) ? ($_GET[id]) :1);

$id = ($cid-1)*5;

$q = mysql_query("SELECT * FROM articles ORDER BY id_article DESC LIMIT ". $id .",5");
$cou = mysql_num_rows($q);
?>

<? while ($row = mysql_fetch_array($q) ):?>
<div style="width:700px ; word-wrap:break-word;">
<p><b>Номер новости:</b>  <?=$row['id_article'];?></p>
<p><b>Дата:</b> <?=$row['time'];?></p>
<p><b>Имя:</b> <?=$row['name'];?></p>

<p><b>Заголовок:</b> <?=substr($row['title'],0,50);?></p>
<p><b>Текст:</b> <?=substr($row['content'],0,200);?>
<b></p><p><a class="a2" href="index.php?id=<?=$cid;?>&news=<?=$row['id_article'];?>" >Показать новость</a></b></p>
</div>
<hr>
<? endwhile; ?>

<?if ($cid >1):?>
<a class="a2" href="index.php?id=<?=($cid-1);?>"> Предыдущие новости</a>
<?else:?>
Предыдущие новости 
<? endif; ?>
<?if ($cou >4):?>
<a class="a2" href="index.php?id=<?=($cid+1);?>"> Следующие новости</a>
<? endif; ?>

