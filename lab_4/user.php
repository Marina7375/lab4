<?php
session_start();
require_once './class/class.php';
include './connect.php';

$login=$_POST["login"];
$password=$_POST["password"];






$result = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");

include './session.php';

if(empty($_SESSION['login']))
  {//echo "Данные введены не верно!";
header("Location: ../index.php");    

}
elseif(empty($_SESSION['lang'])){
 $_SESSION['lang'] = 'ru';
 header("Location: ./change_lang/lang.php");
}

else header("Location:./user_page/".strtolower($_SESSION['role']).".php");
?>
