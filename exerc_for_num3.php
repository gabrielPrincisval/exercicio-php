
<?php


/*Construir um script em PHP que leia um número inteiro não negativo e
imprima na tela o seu fatorial no seguinte formato (suponha que o número lido
tenha sido 5):
5 x 4 x 3 x 2 x 1 = 120 */

$num=$_POST["num1"];
$resultado=1;


if($num>0 and $num!=0){



}

else{

   echo "não pode fazer nada";
}

for($cont=$num;  $cont>=1; $cont--){

    $resultado *=$num;
    $num--;
    echo"<br> $resultado";
    
    }