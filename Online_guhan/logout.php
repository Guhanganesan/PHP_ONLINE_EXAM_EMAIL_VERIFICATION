<?php
        ob_start();
        
       session_destroy();
       if((!$_SESSION['pass']))
       {
           header('Location:login.php');
       }
?>