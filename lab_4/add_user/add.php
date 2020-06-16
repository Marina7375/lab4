<?php 
session_start();
require_once '../class/class.php';

if($_SESSION['role']!='3'){
           
        echo    'Error 404';             
    }
    else{

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
         
        <form method="post" action="add2.php">
        	<p>Имя</p>
         <input type="text" name="name" ><br/>
        	 <p>Фамилия</p>
         <input type="text" name="lastname" ><br/>
          <p>Логин</p>
         <input type="text" name="login" ><br/>
         <p>Пароль</p>
         <input type="password" name="password" ><br/>
          <p>Язык(ru, en, ua )</p>
         <input type="text" name="lang" ><br/>
          <p>Роль(1-клиент,2-менеджер,3-админ)</p>
         <input type="text" name="role" ><br/>

     <input type="submit" value="Подтвердить" id="ok">
        </form>

    </body></html>
    <?php 
}?>