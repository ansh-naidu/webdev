<?php
$rows = 5; // Number of rows in the inverted triangle

for ($i = $rows; $i >= 1; $i--) {
    for ($j = $i; $j >= 1; $j--) {
        echo "* ";
    }
    echo "\n";
}
?>
