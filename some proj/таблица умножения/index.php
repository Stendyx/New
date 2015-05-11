<form aciotn="" method="post">
    <input type="text" name="cols" placeholder="Кол-во столбцов" />
    <input type="text" name="rows" placeholder="Кол-во строк" />
    <input type="text" name="color" placeholder="Color" />
    <input type="submit" value="Create" />


</form>

<?php
function drawTable($rows,$cols,$color){

    if ($_SERVER['REQUEST_METHOD']=="POST") {
        echo <<<table
<table style="background-color:$color;border:1px solid black" />
table;

        for ($tr = 1; $tr <= $rows; $tr++) {
            echo "<tr >";
            for ($td = 1; $td <= $cols; $td++) {
                $summ = $tr*$td;
                if ($td==1 || $tr==1){
                    echo "<td style='text-align:center; border:1px solid darkgrey'><b>" .$summ;
                    echo "</b></td>";
                }
                else{

                    echo "<td style='border:1px solid darkgrey'>" .$summ;
                    echo "</td>";}
            }
            echo "</tr>";
        }

        echo "</table>";
    }




}
drawTable($_POST["rows"],$_POST["cols"],$_POST["color"]);