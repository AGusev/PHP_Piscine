<?php
   require_once('auth.php');
   session_start();
   if ($_GET['login'] && $_GET['passwd'] && auth($_GET['login'], $_GET['passwd'])){
       $_SESSION['logged_in_user'] = $_GET['login'];
       echo "OK\n";
   } else {
       $_SESSION['logged_in_user'] = "";
       echo "error\n";
   }
?>
