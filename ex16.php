<?php
session_start();

$_SESSION['p'] = 'Php';
$_SESSION['j'] = 'Javascript';

//var_dump($_SESSION);

echo $_SESSION['p'].' '.$_SESSION['j'];

session_destroy();
unset($_SESSION);
var_dump($_SESSION);
