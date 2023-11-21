<?php
// Define the number of rows in the inverted triangle
$numRows = 5;

// Generate the inverted triangle pattern
for ($i = $numRows; $i >= 1; $i--) {
    // Print asterisks for each row
    for ($j = $i; $j >= 1; $j--) {
        echo "* ";
    }
    // Move to the next line for the next row
    echo "\n";
}
?>
