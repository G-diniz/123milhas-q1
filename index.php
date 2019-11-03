<?php

// find root for a polinomial function f(x) = ax^2 + bx + c
function findRootSecondDegreeEq($a, $b, $c)
{

    if ($a == 0) {
        if ($b == 0) {
            $x0 = null;
            $x1 = null;
        } else {
            $x0 = sprintf("%0.2f", -$b / $c);
            $x1 = null;
        }
    } else {
        $delta = pow($b, 2) - 4 * $a * $c;

        if ($delta >= 0) {
            $x0 = sprintf("%0.2f", (-$b + sqrt($delta)) / (2 * $a));
            $x1 = sprintf("%0.2f", (-$b - sqrt($delta)) / (2 * $a));
        } else {
            $real = (-$b) / (2 * $a);
            $imaginary = (sqrt(-$delta)) / (2 * $a);
            $x0 = sprintf("%0.2f + i %0.2f", $real, $imaginary);
            $x1 = sprintf("%0.2f + i %0.2f", $real, $imaginary);
        }
    }

    $root = [
        'x0' => $x0,
        'x1' => $x1,
    ];
    return $root;
}


$a = 0;
$b = 0;
$c = -4;

$resultado =  findRootSecondDegreeEq($a, $b, $c);
echo "Testando a função para o polinômio: " . $a . "x^2 + " . $b . "x + " . $c . "<br>";
echo "Resultado: <br> <pre>";
print_r($resultado);
echo "</pre>";
