<?php 
session_start();
require_once '../class/class.php';
include '../connect.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet"  href="../css/style.css">
    
</head>
<body>
    <div class="menu">
        <button class="link"> <a href="../user_page/1.php"><?php echo lang::trans('Client_page'); ?></a></button>
        <button class="link"> <a href="../user_page/3.php"><?php echo lang::trans('Admin_page'); ?></a></button>
        <button class="link"> <a href="../user_page/2.php"><?php echo lang::trans('Manager_page'); ?></a></button></div>

<table>
		 <tr >
        <td > id</td >
        <td > Name</td >
        <td > Surname</td >
        <td > Login</td >
        <td > Language</td >
        <td > Role</td >
        <td>Change</td>
         <td>Delete</td>
    </tr >
		<?php


if($_SESSION['role']!='2'&&$_SESSION['role']!='3'){
           
        echo    'Error 404';             
    }
    else{

       
       
   $sql = mysqli_query($link, 'SELECT `id`, `name`, `lastname`,`login`,`lang`,`role` FROM `users`');

    while ($result = mysqli_fetch_array($sql)) {

        echo '<tr>' .
            "<td>{$result['id']}</td>" .
            "<td>{$result['name']}</td>" .
            "<td>{$result['lastname']}</td>" .
            "<td>{$result['login']}</td>" .
            "<td>{$result['lang']}</td>" .
            "<td>{$result['role']}</td>" .
            "<td><button class='knopka'><a href='../change_user/update.php? id=".$result['id']."'>Change</a></button></td>" .
            "<td><button class='knopka'><a href='../delete_user/delete.php? id=".$result['id']."'>Delete</a></button></td>" .
            '</tr>';
    
    } 
        
        }

?></table><br><button class="knopka"> <a href="exit.php"><?php echo lang::trans('Log out');?></a></button>
<button class="knopka"> <a href="../poisk/poisk.php">POISK</a></button>
<button class="knopka"> <a href="../add_user/add.php">ADD</a></button>
    </body>
    </html></body></html>