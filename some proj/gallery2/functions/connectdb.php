<?php


setlocale(LC_ALL, 'ru-RU.cp1251');
mysql_connect("localhost","root","") or die(mysql_error());
mysql_query ('SET NAMES cp1251');
mysql_select_db("stendyx") or die(mysql_error());
 ?>