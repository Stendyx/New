<?
$rows=$_POST["rows"];
$cols=$_POST["cols"];
$ok=$_POST["ok"];

include ("index.php");

$arr=array();

for ($i=0;$i<$rows;$i++)
{
for ($j=0;$j<$cols;$j++)
{
$arr[$i][$j] = rand(0,9);

}
};

for ($q=0;$q<$rows;$q++)
{
$arr[$q][0] = $q;
};

for ($w=0;$w<$cols;$w++)
{
$arr[0][$w] = $w;
}
echo "</br>";

foreach ($arr as $in)
{
foreach ($in as $in2)
$sum +=$in2;

}
echo "—умма всех €чеек таблицы : " .$sum . "</br>";

foreach ($arr as $inc){
echo implode(",", $inc) . "</br>";

}

/*
for ($i=1;$i<5;$i++)
{
echo "<a href=\"photo.php?id=$i\">Photo nomer $i</a></br>";

};
*/
?>