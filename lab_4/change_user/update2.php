<?php 
session_start();
require_once '../class/class.php';

include '../connect.php';
$link = mysqli_connect('localhost', 'root' , '','users');

if($_SESSION['role']!='3'){
	  echo    'Error 404';             
    }
    else{
    	$id= $_GET['id'];
    	$name=$_POST['name'];
    	$lastname=$_POST['lastname'];
    	$login=$_POST['login'];
    	$lang=$_POST['lang'];
    	$role=$_POST['role'];

$sql=mysqli_query($link, "UPDATE `users` SET `login`='$login',`name`='$name',`lastname`='$lastname',`lang`='$lang',`role`='$role' WHERE `id`='".mysqli_real_escape_string($link,$id)."'");

	header("Location:../client_table/table.php");
}
?>