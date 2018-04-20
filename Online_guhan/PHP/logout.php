<?php
        ob_start();
        
       session_destroy();
       if((!$_SESSION['pass']))
       {
           header('Location:https://guhanraghavan.000webhostapp.com/Online_guhan/login.php');
       }
?>