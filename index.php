<?php 

/*
EJERCICIOS SECCION 1.

1) Calcular e imprimir el area de un rectangulo.
2) Verficar si un numero es par o impar.
3) Comprobar si un estudiante aprobo o reprobo un examen.
4) Calcular e impimir la circunferencia de un circulo.
5) Determinar si un year es bisiesto o no.
6) Determinar la estacion del year segun un mes. (por numero de mes).


*/

// 1) Calcular e imprimir el area de un rectangulo.

$altura = 10;
$base = 5;
$area = $altura * $base;
echo "El area del rectangulo es: $area"; 
echo " <br>";

// 2) Verficar si un numero es par o impar.

$numero = 10;
if($numero % 2 == 0){
    echo "El numero $numero es par";
}else{
    echo "El numero $numero es impar";
}
echo " <br>";

// 3) Comprobar si un estudiante aprobo o reprobo un examen.

$nota = 18;
$limite = 10;
if($nota >= $limite){
    echo "Aprobaste";
}else{
    echo "Reprobaste";
}
echo " <br>"; 

// 4) Calcular e impimir la circunferencia de un circulo.

$circulo = 2 * M_PI * 5;
echo "La circunferencia del circulo es: $circulo";
echo " <br>";

// 5) Determinar si un year es bisiesto o no.

$year = 2024; 
if ($year % 4 == 0) {
    echo "El año $year es bisiesto";
} else {
    echo "El año $year no es bisiesto";
}
echo "<br>";

// 6) Determinar la estacion del year segun un mes. (por numero de mes).

$mes = 7; 

if ($mes >= 3 && $mes <= 5) {
    echo "Primavera";
} elseif ($mes >= 6 && $mes <= 8) {
    echo "Verano";
} elseif ($mes >= 9 && $mes <= 11) {
    echo "Otoño";
} elseif ($mes == 12 || $mes == 1 || $mes == 2) {
    echo "Invierno";
} else {
    echo "Mes inválido";
}

?>;
