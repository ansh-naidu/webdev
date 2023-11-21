<?php

class Practical {
    // Function to print "Hello, World!"
    public static function printHello() {
        echo "Hello, World!";
    }

    // Function to add two numbers
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Function to generate a Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        $fibonacciSequence = [];
        $first = 0;
        $second = 1;

        for ($i = 0; $i < $n; $i++) {
            $fibonacciSequence[] = $first;
            $next = $first + $second;
            $first = $second;
            $second = $next;
        }

        return $fibonacciSequence;
    }
}

?>
