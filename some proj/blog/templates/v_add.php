<?if ($_GET[id]!=2) :?>

<div>
<form action="" method="post">
<input type="text" placeholder="Ваше имя" name="username" value="<?=$usname;?>" /></br>
<input type="text" placeholder="Заголовок новости" name="usertitle" value="<?=$ustitle;?>" /></br>
<textarea placeholder="Текст сообщения" rows="10" cols="100" name="usertext" ><?=$ustext;?></textarea></br>
<input type="submit" value="Опубликовать" name="ok"/>
<input type="submit" value="Очистить" name="del"/>
</form>
</div>





<?else :
echo "Новость добавлена!";
endif;?><?



if (check($_POST['username'],$_POST['usertitle'],$_POST['usertext'])===2) {echo "Все поля обязательны к заполнению!";}

?>

