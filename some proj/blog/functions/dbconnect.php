<?
setlocale(LC_ALL, 'ru-RU.cp1251');
mysql_connect(DB_SERVER,DB_LOGIN,DB_PASSWORD) or die (mysql_error());
mysql_select_db(DB_DATABASE);
mysql_query ('SET NAMES cp1251') or die (mysql_error());
?>