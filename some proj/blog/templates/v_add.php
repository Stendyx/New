<?if ($_GET[id]!=2) :?>

<div>
<form action="" method="post">
<input type="text" placeholder="���� ���" name="username" value="<?=$usname;?>" /></br>
<input type="text" placeholder="��������� �������" name="usertitle" value="<?=$ustitle;?>" /></br>
<textarea placeholder="����� ���������" rows="10" cols="100" name="usertext" ><?=$ustext;?></textarea></br>
<input type="submit" value="������������" name="ok"/>
<input type="submit" value="��������" name="del"/>
</form>
</div>





<?else :
echo "������� ���������!";
endif;?><?



if (check($_POST['username'],$_POST['usertitle'],$_POST['usertext'])===2) {echo "��� ���� ����������� � ����������!";}

?>

