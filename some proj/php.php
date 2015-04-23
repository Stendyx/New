<?php

db_config{
define ("DB_SERVER","localhost");
define ("DB_LOGIN","root");
define ("DB_PASSWORD", "");
define ("DB_NAME", "stendyx");}

db_connect{
setlocale(LC_ALL, 'ru-RU.cp1251');
mysql_connect (DB_SERVER,DB_LOGIN,DB_PASSWORD)or die (mysql_error());
mysql_select_db(DB_NAME) or die (mysql_error());
mysql_query ('SET NAMES cp1251');}

РАБОТА С БД{

mysql_query($string);{ // $string - запросы: 
"SELECT * FROM messages ORDER BY dataa DESC" // выбрать все сообщения отсортированные по дате
"UPDATE table_name SET name="max",last_name="yg" WHERE year="2014" AND .. //Изменяет имя и фамилию у строк где год 2014 ...
"DELETE FROM tab_n WHERE id=4" // удаление
"INSERT INTO messages (name,msg) VALUES ('$usname','$usmsg')" // ЗАПИСЬ В БД
}

mysql_error()  // пишет ошибку. норм в совокупе с OR DIE 
mysql_num_rows($q) // где $q - это селект , аналог count
mysql_fetch_array($q) // где $q - это селект , аналог array[список] понимает и ключи [0],[1],[2] и ассоц массив [key],[key2]...
примеры{ 
: while ($row=mysql_fetch_array($q)) {echo $row[$col]} где $col - это столбец (ид, имена и тд )
или : for ($i=0;$i <mysql_num_rows($q)) $i++) {$row=mysql_fetch_array($q); echo $row[$col]; }}


}


ЗАЩИТНЫЕ ФУНКЦИИ{ 
htmlspecialchars($text) экранирует все теги , 
mysql_real_escape_string($text) - экранирует символы в строках 
( для чисел достаточно поставить (int)($name) 

sprintf для упрощения можно насильно заставлять писать либо цифры либо строки{
$name = %s . %d;
$sp = ($name ,mysql_real_escape_string($username),$year);
ГДЕ $name - строка
%s - строка . %d - число . %f - действ. число
}

нельзя передавать файл по типу index.php?file=file.php include[$_GET[file] - надо закрывать либо в свиче либо ифы
hiden поля мб видно в исходном коде
}

Альтернативный синтаксис {
<?foreach ($articles as $article):?> <?endforeach?>
<? if ($a == 5): ?>A равно 5<? else: ?><? endif; ?>
Тернарный оператор
$page = (isset($_GET[page])) ? int($_GET[page]):1 );

$var = condition ? exp1 : exp2; If condition is true - $var = exp1 ; else $var = exp2;
}

БУФЕР{
ob_start();
echo "123";
$x=ob_get_clean();
echo $x ."456";
}

ШАБЛОН
{
//view.php
function view_page ($filename, $vars= array())
{

foreach($vars as $key=>$name)
{
$$key = $name;

}
ob_start();

include ("$filename");

return ob_get_clean();


} 
// index.php
include ("view.php");

$content=view_page("v_index.php",
array(username=>'username',title=>'Титл страницы'));

echo $content;}

Редактор с тегами и норм версткой вместо TEXTAREA {
CKEditor & TinyMCE
nl2br ($text) - заменяет ентеры на бры для норм верстки
}


ООП
{
Классы лучше всего называть как файлы - C_Edit - C_Edit.php

функция __autoload($classname { include_once("url/$classsname.php")}

обычный {

class Abc {
var $id;

function view_id()
{
echo $this->id;
}
}
$s = new Abc();
$s->id = 333;
$s->view_id();
}

конструктор{


class Abc {
var $id;
var $year;

// можно __construct вместо повторения имени класса 
function Abc($id,$year)
{
$this->id = $id;
$this->year = $year;
}
function view (){
echo $this->id . " abc " . $this->year;
}
}
$s = new Abc(123,456);
$s->view();






}

наследование{

class Abc {
var $id;
var $year;

// можно __construct вместо повторения имени класса 
function Abc($id,$year)
{
$this->id = $id;
$this->year = $year;
}
function view (){
echo $this->id . " abc " . $this->year;
}
}

class Def extends Abc
{
var $ctime;

function Def($id , $year, $ctime)
{
parent::Abc ($id,$year);
$this->ctime=time ();

function view (){
echo $this->id . " abc " . $this->year .ctrftime(%d,%m,%y) , $this->ctime;
}


}



}

}

Виде переменных класса {
public $a Виден всем
private $a виден только себе
protected $a виден себе и детям

const COPYRIGHT ="www.ya.ru"; не меняется / обращаться через Abc::COPYRIGHT 
внутри функции ссылка будет не на $this - (ссылка на объект)  а .self - ссылка на класс
abstract - нельзя использовать при наследовании

}

функции {
__construct ($a,$b... ) делать конструктор для класса
__clone () {$this->id=$this->id +1 } клонирует класс , и увеличит ид на 1 чтоб не повторялось

}

статичность{

class MathOp{
// static - значит что этот метод принадлежит не экземпляру классу а самому класу
static public function sum ($x,$y){
return $x+$y;
}
static public function min ($x,$y){
return $x-$y;
}
}
echo MathOp::sum(3,2); echo MathOp::min(3,2);

}

интерфейс {

interface IArticle {
public function view ();
public function set_title($title);
public function get_title();
// правило для интерфейса - т.е если есть этот интерфейс то должны быть эти 3 функции в ней
}
class Article implements IArticle; // теперь если в классе Артикл не будет 3 функций этих то будет ругаться
implements - должна быть
}
jijjjjijiijihgkjhubu
}



?>