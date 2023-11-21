<?php
// Initialize variables
$a = 5;
$b = 10;

// Display values before swapping
echo "Before swapping: a = " . $a . ", b = " . $b . "<br>";

// Swap values using a temporary variable
$temp = $a;
$a = $b;
$b = $temp;

// Display values after swapping
echo "After swapping: a = " . $a . ", b = " . $b;
?>
