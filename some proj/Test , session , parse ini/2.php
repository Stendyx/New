<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $_SESSION["Answer"]['2'] =$_POST["answer"];
  //  array_push($_SESSION["Answer"],$_POST["answer"]);
    header  ('Location: res.php');
}
else {

    echo "2+1?";
    echo '</br><form action="" method="post"><input type="radio" name="answer" value ="b1"/> 3
<input type="radio" name="answer" value="b2"/> 4
</br><input type="submit" value = "ENTER" />';
}