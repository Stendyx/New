<?php

$count = 0;

if (!empty($_COOKIE['counter'])){
    $count = $_COOKIE['counter'];

}
$count++;


setcookie('counter',"$count");

$datee = date('Y-m-d H:i:s');
setcookie('dt',"$datee");
echo "Вы зашли на страницу " . $_COOKIE['counter'] . " раз ! </br> Последний
ваш заходи был " . $_COOKIE['dt'] ;

