<html>
<head>
<title><?=$title;?></title>
<style>
h3{color:white;}
h4{color:white;}
a:link{color:#f5fbd7;}
a:visited{color:#ccfbd7;}
a.a2:link
{color:blue;}
a.a2:visited
{color:red;}
</style>
</head>
<body>
<div style="background-color:black;border:2px dashed grey; height:80px; width:1000px;">
<h3><? if ($cpage=="index"):?>
������� �������� 
 <?else:?>
 <a href="index.php">������� ��������</a> 
 <? endif;?>
 
||  
<? if ($cpage=="editor"):?>
�������� ��������
 <?else:?>
<a href="editor.php">�������� ��������</a></h3>
 <? endif;?>

<h4 align="center"> 
<? if ($cpage=="add"):?>
�������� �������
 <?else:?>
<a href="add.php">�������� �������</a></h4>
 <? endif;?>


</div>
<hr>