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
	
			
if($_SESSION['role']!='3'&&$_SESSION['role']!='2'){
           
        echo    'Error 404';             
    }
    else{


$name=mysqli_real_escape_string($link,$_POST['name']);

$lastname=mysqli_real_escape_string($link,$_POST['lastname']);

$lang=mysqli_real_escape_string($link,$_POST['lang']);

$sql=mysqli_query($link, "SELECT * FROM `users` WHERE `name` LIKE '$name%' AND `lastname` LIKE '$lastname%' AND `lang` LIKE '$lang'");

	while ($result = mysqli_fetch_array($sql)) {

        echo '<tr>'.
            "<td>{$result['id']}</td>" .
            "<td>{$result['name']}</td>" .
            "<td>{$result['lastname']}</td>" .
            "<td>{$result['login']}</td>" .
            "<td>{$result['lang']}</td>" .
            "<td>{$result['role']}</td>" .
            "<td><button class='knopka'><a href='../change_user/update.php? id=".$result['id']."'>Change</a></button></td>".
            "<td><button class='knopka'><a href='../delete_user/delete.php? id=".$result['id']."'>Delete</a></button></td>".
            '</tr></table>';
    
    } 
}
	?>
	</table>
	    </body></html>