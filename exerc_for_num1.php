<?php


/*) Construir um script em PHP que leia o número de vezes que se deseja
imprimir a frase “Eu estou aprendendo o loop FOR” e em seguida exiba a
frase na tela a quantidade de vezes solicitada (uma frase por linha).*/


/*$var = "Luciene";
for ($cont = 1; $cont < 5; $cont++){
echo "$var <br>";
}
}*/

$numdevezes=$_POST["num1"];


for($cont=0; $cont<$numdevezes; $cont++){

    echo "Eu estou aprendendo o loop FOR <br>";
}

?>