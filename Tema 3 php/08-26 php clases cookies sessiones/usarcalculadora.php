<?php
include ('calculadora.php');
// Usar la clase
$calc = new Calculadora();
echo $calc->sumar(15, 27),'<br>';
// 42
echo $calc->factorial(5),'<br>';
// 120
$fib = $calc->fibonacci(8);
// [0, 1, 1, 2, 3, 5, 8, 13]
foreach ($fib as $f )
    {
        echo $f.',';
    }
echo $calc->resultado;
// 120
?>