<?php
function login($username, $remember){
$_SESSION["username"]=$username;

if ($remember)
setcookie("username",$username,time() +3600*24*7);

return true;

}


function logout (){
setcookie("username","",time() -1);
$_SESSION["username"]=null;


}




session_start();
$enter=false;
logout();
trim($_POST["username"]);

if(count($_POST["username"])>0 && $_POST["pass"]==333)
$enter=login($_POST["username"], $_POST["remember"] == "on");

if ($enter)
{ header("Location: a.php");
exit();
}







?>


<form action="" method="post">
<div align="center" style="padding:150px;">
<h2> Приветствуем вас на нашем закрытом сайте ! </h2>
<p><b> Вход только по секретным паролям ! </b></p>

<input type="text" placeholder="Ваше имя" name="username"/>
</br>
<input type="text" placeholder="Пароль" name="pass"/>
</br></br>
<input type="checkbox" name="remember"/>Запомнить меня
</br></br>
<input type="submit" value="Отправить"/>
</div>

</form>