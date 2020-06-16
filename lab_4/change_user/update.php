<?php 
session_start();
require_once '../класс/class.php';
include '../connect.php';
if($_SESSION['role']!='3'){
           
        echo    'Error 404';             
    }
    else{

$id=$_GET['id'];

$sql = mysqli_query($link, "SELECT `id`, `name`, `lastname`,`login`,`lang`,`role` FROM `users` WHERE `id`='$id'");

    while ($result = mysqli_fetch_array($sql)) {

        echo
          
            "<form method='post' action='update2.php?id=". $result['id']."'>".
            "<p>Имя</p>".
            "<input type='text' name='name' value=".$result['name']."><br>" .
            "<p>Фамилия</p>".
            "<input type='text' name='lastname' value=".$result['lastname']."><br>" .
            "<p>Логин</p>".
            "<input type='text' name='login' value=".$result['login']."><br>" .
            "<p>Язык</p>".
            "<input type='text' name='lang' value=".$result['lang']."><br>" .
            "<p>Роль</p>".
            "<input type='text' name='role' value=".$result['role']."><br>" .
            "<input type='submit' value='Подтвердить' id=".$result['id']."</form>" ;
    
    }} ?>