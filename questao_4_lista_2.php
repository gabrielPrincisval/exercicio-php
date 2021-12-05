<?php

$num1=$_POST["numero"];
$num2=$_POST["numero2"];

$conta= $num1 + $num2;


if($conta % 2==0){

    echo "$conta é par";
}

else {
    echo"$conta é impar";
}