<?php 
session_start();
include '../class/class.php';
include '../connect.php';

include 'menu.php';

    
    
      $user=role();
      $user->us();
    
      
    

    
 ?><br><button class='knopka'> <a href='../change_client/change.php'>CHANGE</a></button>
    <button class="knopka"> <a href="../exit.php">
    <?php echo lang::trans('Log out');?></a></button>
    <br>


  
</body>
</html>



