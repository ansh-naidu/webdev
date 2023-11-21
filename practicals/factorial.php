<?php
function factorial($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

// Calculate factorial of a number (e.g., 5)
$number = 5;
echo "Factorial of " . $number . " is: " . factorial($number);
?>
