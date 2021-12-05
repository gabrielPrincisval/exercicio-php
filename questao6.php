<?php

//questao 6


$vitorias=23;
$derrotas=4;
$empates=11;
$v=3;
$d=0;
$e=1;

echo " Foram de $vitorias vitorias <hr> <br>";
echo " Foram de $derrotas derrotas <hr> <br>";
echo " Foram de $empates empates <hr> <br>";

//total de jogos

$totaldejogos=($vitorias+ $derrotas+ $empates);
echo " foram $totaldejogos partidas <hr> <br>";

$totaldepontos=($totaldejogos*$v);
echo " O total de pontos disputados foram $totaldepontos <hr> <br>";

//pontos de vitorias
$pontosdasvitorias=($vitorias*$v);
//pontos de empates
$pontosempates=($empates*$e);
//pontos totais 
$pontosganhos=($pontosdasvitorias+$pontosempates);
echo "o total de pontos ganhos foram $pontosganhos <hr> <br>";

//pontos perdidos

$pontosperdidos=($totaldepontos-$pontosganhos);

echo "os pontos perdidos foram $pontosperdidos <hr> <br>";



$variavel = "vaipassar"; echo "$variavel"; 

$variavel="vaipassar"; echo '$variavel';


