<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $_SESSION["Answer"] = array(
        "1" => $_POST["answer"],
);
    header  ('Location: 2.php');
}
else {

    echo "2+2?";
    echo '</br><form action="" method="post"><input type="radio" name="answer" value ="a1"/> 3
<input type="radio" name="answer" value="a2"/> 4
</br><input type="submit" value = "ENTER" />';
}