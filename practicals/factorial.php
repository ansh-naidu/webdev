<?php
// Function to calculate factorial of a number
function factorial($n) {
    // Base case: factorial of 0 and 1 is 1
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        $result = 1;

        // Calculate factorial iteratively
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }

        return $result;
    }
}

// Example usage to calculate factorial of a number (e.g., 5)
$number = 5;
echo "Factorial of " . $number . " is: " . factorial($number);
?>

