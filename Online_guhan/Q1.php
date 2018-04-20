<?php
      ob_start();
      session_start();
       echo "This area for questions";
       
       if(!isset($_SESSION['pass']))
       {
           header('Location:login.php');
       }
?>

<a href="logout.php">logout </a>