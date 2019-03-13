<?php
session_start();
/*echo $_SERVER['REMOTE_ADDR'];
echo $_SERVER['PHP_SELF'];*/
echo $_SERVER['REQUEST_METHOD'];
echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; 
echo $_SESSION['p'].' '.$_SESSION['j'];