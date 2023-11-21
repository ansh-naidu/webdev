<?php
// Function to calculate the Fibonacci sequence up to a given number
function fibonacci($n) {
    // Base cases: Fibonacci of 0 is 0, and Fibonacci of 1 and 2 is 1
    if ($n == 0) {
        return 0;
    } elseif ($n == 1 || $n == 2) {
        return 1;
    } else {
        // Array to store Fibonacci sequence
        $fib = [0, 1, 1];

        // Calculate Fibonacci sequence iteratively
        for ($i = 3; $i <= $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }

        return $fib[$n];
    }
}

// Displaying the Fibonacci sequence for the first 10 numbers
echo "Fibonacci sequence for the first 10 numbers: ";
for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . " ";
}
?>
