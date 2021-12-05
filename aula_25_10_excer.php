<?php

/*faça um script em php que solicite ao usuario a digitação de 3 numeros inteiros maiores do que 0 e apresente na tela todos os impares do intervaalo entre a diferença do primeiro pelo segundo e a soma do dois maiores numeros*/

/*$num1= menor, $num2= meio, $num3= maior

https://www.phpprogressivo.net/2019/01/Recebe-Tres-Numeros-Exibe-Ordem-Crescente.html

*/

//ajeitar a logica ajeitar o segundo if e colocar um else


$num1=$_POST["num1"];
$num2=$_POST["num2"];
$num3=$_POST["num3"];



/*Garante que todos os numeros lidos são maiores do que 0*/

if($num1>0 and $num2>0 and $num3>0){

    if($num2<$num1){
        $temp=$num1;
        $num1=$num2;
        $num2=$temp;
    }// num1 será menor do que num2
    
    if($num3< $num1){
        $temp=$num1;
        $num1=$num3;
        $num3=$temp;
    }// num1 será menor do que num3

    if($num3<$num2){
        $temp=$num2;
        $num2=$num3;
        $num3=$temp;
    }// num2 será menor do que num3
    
    echo "$num1 < $num2 < $num3 <br> <br>";

} else {
    echo"Não pode fazer nada";
}

$conta= $num2 - $num1;
$conta2= $num3+$num2;

echo"$conta, $conta2 <br>";
/*
for($cont=$conta; $cont <$conta2; $cont++ ){
    if($cont%2 !=0){
        echo "$cont <br>";
    }
}
*/


$conta++;
for(;$conta <$conta2; $conta++ ){
    if($conta%2 !=0){
        echo "$conta <br>";
    }
}

/*
$conta++;
while($conta<$conta2){
    if($conta%2 !=0){
        echo "$conta <br>";
    }
    $conta++;
}*/