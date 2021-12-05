<?php

$mes=$_POST["mes"];

if($mes>=1 and $mes<=3){

    echo "O mes $mes é referente ao primeiro trimestre";

}

elseif($mes>=4 and $mes<=6){

echo "O mes $mes é referente ao segundo trimestre";

}

elseif($mes>=7 and $mes<=9){

    echo "O mes $mes é referente ao terceiro trimestre";
}

elseif ($mes>=10 and $mes<=12) {

    echo "O mes $mes é referente ao quarto trimestre";
}

else {
    echo" O mes é invalido";
}