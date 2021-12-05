<?php

/*


<?php
$fat = $_POST['fat'];
$resul = 1;
	for($i = $fat; $i >= 1; $i--){
		$resul *= $fat; 
		$fat--;
	}

echo "<br><br>".$resul."<br><br><br>";

?>
<br><br>
<form method="post" action="fatorial.php">
<input type="text" name="fat"><br>
<input type="submit" name="aa" value="enviar">
</form>





*/


/* Construir um script em PHP que leia um número inteiro não negativo e
imprima na tela o seu fatorial.*/


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
echo"<br> $resultado <br>";

}
