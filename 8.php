<?php

$size= (int)readline('Enter number : ');


for ($i = 1; $i <= $size; $i++) {
    // printing spaces
    for ($j = $size; $j > $i; $j--) {
        echo ' ';
    }
    for ($k = 0; $k < $i * 2 - 1; $k++) {
        echo "*";
    }
    echo  PHP_EOL;
}

for ($i = 1; $i <= $size - 1; $i++) {
    // printing spaces
    for ($j = 0; $j < $i; $j++) {
        echo ' ';
    }

    for ($k = ($size - $i) * 2 - 1; $k > 0; $k--) {
        echo "*";
    }
    echo PHP_EOL;
}