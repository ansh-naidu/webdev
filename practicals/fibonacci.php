<?php
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1 || $n == 2) {
        return 1;
    } else {
        $fib = [0, 1, 1];
        for ($i = 3; $i <= $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib[$n];
    }
}

// Generating and printing the Fibonacci sequence for the first 10 numbers
echo "Fibonacci sequence for the first 10 numbers: ";
for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . " ";
}
?>
