<?php
session_start();
$user = $_SERVER['REMOTE_ADDR'];
$to = $_SERVER['REQUEST_URI'];
$dt = date('d-m-Y H:i:s');

file_put_contents('log.ini',$user . "|" . $to . "|" . $dt . "\n" , FILE_APPEND );

$all = file('log.ini');
echo "<ol>";
foreach($all as $line)
{

   list($ip,$server,$dat) = explode('|',$line);
    echo <<<LINE
<li>Пользователь зашел с ip:$ip ; На страницу : $to ; В это время: $dat</li>
LINE;


}
echo "</ol>";