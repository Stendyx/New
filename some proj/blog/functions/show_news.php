<?php
$cid = ((!empty($_GET[id])) ? ($_GET[id]) :1);

$id = ($cid-1)*5;

$q = mysql_query("SELECT * FROM articles ORDER BY id_article DESC LIMIT ". $id .",5");
$cou = mysql_num_rows($q);
?>

<? while ($row = mysql_fetch_array($q) ):?>
<div style="width:700px ; word-wrap:break-word;">
<p><b>����� �������:</b>  <?=$row['id_article'];?></p>
<p><b>����:</b> <?=$row['time'];?></p>
<p><b>���:</b> <?=$row['name'];?></p>

<p><b>���������:</b> <?=substr($row['title'],0,50);?></p>
<p><b>�����:</b> <?=substr($row['content'],0,200);?>
<b></p><p><a class="a2" href="index.php?id=<?=$cid;?>&news=<?=$row['id_article'];?>" >�������� �������</a></b></p>
</div>
<hr>
<? endwhile; ?>

<?if ($cid >1):?>
<a class="a2" href="index.php?id=<?=($cid-1);?>"> ���������� �������</a>
<?else:?>
���������� ������� 
<? endif; ?>
<?if ($cou >4):?>
<a class="a2" href="index.php?id=<?=($cid+1);?>"> ��������� �������</a>
<? endif; ?>

