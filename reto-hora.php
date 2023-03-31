<?php

$horas = readline("Ingrese el tiempo en horas: ");
$minutos = readline("Ingrese el tiempo en minutos: ");
$segundos = readline("Ingrese el tiempo en segundos: ");

$totalhoras = ($horas * 3600);
$totalminutos = ($minutos * 60);
$totalsegundos = $segundos;

echo "Son $totalhoras segundos en horas, $totalminutos en minutos y $totalsegundos en segundos";
