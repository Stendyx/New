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

������ � ��{

mysql_query($string);{ // $string - �������: 
"SELECT * FROM messages ORDER BY dataa DESC" // ������� ��� ��������� ��������������� �� ����
"UPDATE table_name SET name="max",last_name="yg" WHERE year="2014" AND .. //�������� ��� � ������� � ����� ��� ��� 2014 ...
"DELETE FROM tab_n WHERE id=4" // ��������
"INSERT INTO messages (name,msg) VALUES ('$usname','$usmsg')" // ������ � ��
}

mysql_error()  // ����� ������. ���� � �������� � OR DIE 
mysql_num_rows($q) // ��� $q - ��� ������ , ������ count
mysql_fetch_array($q) // ��� $q - ��� ������ , ������ array[������] �������� � ����� [0],[1],[2] � ����� ������ [key],[key2]...
�������{ 
: while ($row=mysql_fetch_array($q)) {echo $row[$col]} ��� $col - ��� ������� (��, ����� � �� )
��� : for ($i=0;$i <mysql_num_rows($q)) $i++) {$row=mysql_fetch_array($q); echo $row[$col]; }}


}


�������� �������{ 
htmlspecialchars($text) ���������� ��� ���� , 
mysql_real_escape_string($text) - ���������� ������� � ������� 
( ��� ����� ���������� ��������� (int)($name) 

sprintf ��� ��������� ����� �������� ���������� ������ ���� ����� ���� ������{
$name = %s . %d;
$sp = ($name ,mysql_real_escape_string($username),$year);
��� $name - ������
%s - ������ . %d - ����� . %f - ������. �����
}

������ ���������� ���� �� ���� index.php?file=file.php include[$_GET[file] - ���� ��������� ���� � ����� ���� ���
hiden ���� �� ����� � �������� ����
}

�������������� ��������� {
<?foreach ($articles as $article):?> <?endforeach?>
<? if ($a == 5): ?>A ����� 5<? else: ?><? endif; ?>
��������� ��������
$page = (isset($_GET[page])) ? int($_GET[page]):1 );

$var = condition ? exp1 : exp2; If condition is true - $var = exp1 ; else $var = exp2;
}

�����{
ob_start();
echo "123";
$x=ob_get_clean();
echo $x ."456";
}

������
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
array(username=>'username',title=>'���� ��������'));

echo $content;}

�������� � ������ � ���� �������� ������ TEXTAREA {
CKEditor & TinyMCE
nl2br ($text) - �������� ������ �� ��� ��� ���� �������
}


���
{
������ ����� ����� �������� ��� ����� - C_Edit - C_Edit.php

������� __autoload($classname { include_once("url/$classsname.php")}

������� {

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

�����������{


class Abc {
var $id;
var $year;

// ����� __construct ������ ���������� ����� ������ 
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

������������{

class Abc {
var $id;
var $year;

// ����� __construct ������ ���������� ����� ������ 
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

���� ���������� ������ {
public $a ����� ����
private $a ����� ������ ����
protected $a ����� ���� � �����

const COPYRIGHT ="www.ya.ru"; �� �������� / ���������� ����� Abc::COPYRIGHT 
������ ������� ������ ����� �� �� $this - (������ �� ������)  � .self - ������ �� �����
abstract - ������ ������������ ��� ������������

}

������� {
__construct ($a,$b... ) ������ ����������� ��� ������
__clone () {$this->id=$this->id +1 } ��������� ����� , � �������� �� �� 1 ���� �� �����������

}

�����������{

class MathOp{
// static - ������ ��� ���� ����� ����������� �� ���������� ������ � ������ �����
static public function sum ($x,$y){
return $x+$y;
}
static public function min ($x,$y){
return $x-$y;
}
}
echo MathOp::sum(3,2); echo MathOp::min(3,2);

}

��������� {

interface IArticle {
public function view ();
public function set_title($title);
public function get_title();
// ������� ��� ���������� - �.� ���� ���� ���� ��������� �� ������ ���� ��� 3 ������� � ���
}
class Article implements IArticle; // ������ ���� � ������ ������ �� ����� 3 ������� ���� �� ����� ��������
implements - ������ ����
}
jijjjjijiijihgkjhubu
}



?>