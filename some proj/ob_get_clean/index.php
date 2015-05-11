<?php
echo "11111 ";
ob_start();
echo "222 " . $_COOKIE['name'];
header ("Set-cookie: name=Vasya");
$abc =ob_get_clean();
echo "3333 ";
echo $abc;