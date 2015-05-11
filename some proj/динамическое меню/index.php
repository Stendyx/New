<?php

$menu = array(
    array('link'=>'/','value'=>'Home'),
    array('link'=>'/','value'=>'Guest'),
    array('link'=>'/','value'=>'Exit')

);
function showMenu ($arr,$vertical=true)
{
    $style = '';
if (!$vertical)
{
    $style="style='display:inline;margin-left:15px'";

}

        echo "<ul >";
        foreach ($arr as $v) {
            echo "<li $style>";
            echo " <a href='{$v['link']}' >{$v['value']}</a>";
            echo "</li>";
        }
        echo "</ul>";

}
showMenu($menu,true);
showMenu($menu,false);