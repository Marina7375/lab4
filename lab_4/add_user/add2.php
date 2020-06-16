<?php 
session_start();
require_once '../class/class.php';

include '../connect.php';
if($_SESSION['role']!='3'){
           
        echo    'Error 404';             
    }
    else{

    	$name=$_POST['name'];
    	$lastname=$_POST['lastname'];
    	$login=$_POST['login'];
    	$password=$_POST['password'];
    	$lang=$_POST['lang'];
    	$role=$_POST['role'];

$sql=mysqli_query($link, "INSERT INTO `users` (`login`, `password`, `name`, `lastname`, `lang`, `role`) VALUES ( '$login', '$password', '$name', '$lastname', '$lang', '$role')");

	header("Location:../client_table/table.php");
}
?>