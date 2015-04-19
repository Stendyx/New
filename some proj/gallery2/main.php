<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
 </head>
<body>
<div style="background-color:grey; height:100px;width:100%;" "  align="center">Шапка сайта </div>
<div style="height:250px;background-color:grey;width:150px;float:left;" ><ul>
<li>Пункт меню</li>
<li>Пункт меню</li>
<li>Пункт меню</li><li>Пункт меню</li>
</ul> </div>
<?php if ($_GET["qid"]==0){include("form.php");}?>
</body>
</html>