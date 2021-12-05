<?php

//

$kminicial=250;
$kmfinal=60;
$combustivelconsumido=20;
$mediadekm =1/16;
echo "Km inicial é $kminicial <br>";
echo "Km final é de $kmfinal <br>";
echo "O combustivel consumido foi $combustivelconsumido litros <br>";

//km percorridos

$kmpercorrido=($kminicial-$kmfinal);
echo "O Km percorrido foi de: $kmpercorrido <br>";

//média de km por litros

$mediadekmporlitros=($kmpercorrido/$combustivelconsumido);
echo "o combustivel consumido foi de  1 litro a cada $mediadekmporlitros km";
