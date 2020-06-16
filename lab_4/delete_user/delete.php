<?php 
session_start();
require_once '../class/class.php';
include '../connect.php';

if($_SESSION['role']!='3'){
           
        echo    'Error 404';             
    }
    else{

$id= $_GET['id'];

$sql=mysqli_query($link, "DELETE FROM `users` WHERE `id`='".mysqli_real_escape_string($link,$id)."'");
	header("Location:../client_table/table.php");
echo"Delete"; }
?>