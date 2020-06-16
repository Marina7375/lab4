<?php 
session_start();
require_once '../class/class.php';

include '../connect.php';
$link = mysqli_connect('localhost', 'root' , '','users');


    	$id= $_GET['id'];
    	$name=$_POST['name'];
    	$lastname=$_POST['lastname'];
    	$login=$_POST['login'];
        $password=$_POST['password'];
    	$lang=$_POST['lang'];
    	$role=$_POST['role'];

mysqli_query($link, "UPDATE `users` SET `login`='$login',`password`='$password',`name`='$name',`lastname`='$lastname',`lang`='$lang',`role`='$role' WHERE `id`='".mysqli_real_escape_string($link,$id)."'");

if($id==$_SESSION['id']){
$result = mysqli_query($link, "SELECT * FROM `users` WHERE `id`='$id' ");


include '../session.php';

	header("Location:../user_page/1.php");}

?>