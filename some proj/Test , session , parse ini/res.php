<?php
session_start();
$us_ans = $_SESSION["Answer"];

$answers = parse_ini_file('answers.ini');

foreach ($us_ans as $answer)
{
    if (array_key_exists($answer,$answers))
{
    $res += (int)$answers["$answer"];

}

}
echo "Вы ответили на " . $res . "ответов из 2!";

session_destroy();
