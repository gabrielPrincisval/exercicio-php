<?php

//questao 5

$alunosmas=27;
$alunosfem=20;
$alunosaprovados=42;

echo " Os alunos do sexo masculino são $alunosmas <hr> <br>";
echo " Os alunos do sexo Feminino são $alunosfem <hr> <br>";
echo "Os alunos aprovados foram $alunosaprovados <hr> <br>";

//total de alunos

$totaldealunos=($alunosmas+ $alunosfem);
echo " O total de alunos(a) são $totaldealunos <hr> <br>";

//porcetagem de alunos mas

$pormasc=($alunosmas/$totaldealunos)*100; 
$pormasc= number_format($pormasc, 2, '.','.');
echo " a porcetagem de alunos masculino é de $pormasc% <hr> <br>";

//porcetagem de alunos fem

$porfem=($alunosfem/$totaldealunos)*100;
$porfem=number_format($porfem,2,'.','.');
echo " A porcetagem de alunos feminino é de $porfem% <hr> <br>";

//porcetagem de alunos aprovados

$poraprovados=($alunosaprovados/$totaldealunos)*100;
$poraprovados= number_format($poraprovados, 2, '.','.');
echo "a porcetagem de alunos aprovados são de $poraprovados% <hr> <br>";


