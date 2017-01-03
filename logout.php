<?php
 session_start();
 foreach($_SESSION as $k => $v){
 	unset($_SESSON[$k]);
 };
 setcookie("PHPSESSID","");
 session_destroy();
 header("location:index.php");
 exit;
?>
