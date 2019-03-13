<?php

$age = 20;

switch($age){
    case 1:
        echo'Nourrisson';
        break;
    case 2:
        echo'Bébé';
        break;
    case 7:
        echo'Enfant';
        break;
    case 12:
        echo'Pre ado';
        break;
    case 15:
        echo'Ado';
        break;
    case 18:
        echo'Majeur';
        break;
    default:
    echo'Age non défini';
}