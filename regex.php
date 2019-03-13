<?php
$search ="/^(?=.*\d)(?=[A-Z].*)(?=.*[`~!@#$%^&*()_\-+={}[\]\\|:;\"\'<>,\.\?\/]$).{8}$/";
$mot = "Simon77#";

if(preg_match($search,$mot)){
    echo "ok";

}else{
    echo "ko";
}