<?php
class Calculadora {
    public $resultado;

    public function __construct() {
        $this->resultado = 0;
    }

    public function sumar($a, $b) {
        $this->resultado = $a + $b;
        return $this->resultado;
    }

    public function factorial($n) {
        $fact = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fact *= $i;
        }
        $this->resultado = $fact;
        return $fact;
    }

    public function fibonacci($n) {
        $fib = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fib[] = $fib[$i-1] + $fib[$i-2];
        }
        return $fib;
    }
}