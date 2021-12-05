<?php

$fem=$_POST["genero"];
$idade=$_POST["idade"];
$nome=$_POST["nome"];


if($fem=="Feminino" and $idade<=25){

    echo "$nome foi aceita";

}

else { 

    echo"$nome tente novamente na proxima";
    
}