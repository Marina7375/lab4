<?php 
session_start();
include '../class/class.php';
include '../connect.php';

include 'menu.php';
    if($_SESSION['rol']!='1'){

    
            $user=role();
            $user->us();
        
            
        }
        else{

            echo    'Error 404';
        }
        

        

        ?>
     <br>
     <button class="knopka">
      <a href="../exit.php"><?php echo lang::trans('Log out'); ?></a>
     </button>
     <button class='knopka'> <a href='../change_client/change.php'>CHANGE</a></button>
     <button class="knopka"> <a href="../client_table/table.php"><?php echo lang::trans('List');?>
     </a>
 </button>
 </body>
 </html>


