<?php
$size = readline('Enter the number: ');
$type = readline ('Select the type: (a/ b/ c/ d) ');

if ($type === 'a') {
    for ($i = 0; $i < $size; $i++) {
        for ($j = 1; $j <= $i + 1; $j++) {
            echo "$j ";
        }
        echo PHP_EOL;
    }
}

if ($type === 'd') {
    for ($i = $size; $i >= 1; $i--) {
        for ($j = $i; $j >= 1; $j--) {
            echo "$j ";
        }
        echo PHP_EOL;
    }
}

if ($type === 'b') {
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo '  ';
        }
        for ($k = 1; $k <= $size - $i; $k++) {
            echo "$k ";
        }
        echo PHP_EOL;
    }
}

if ($type === 'c') {
    for ($i = 0; $i < $size; $i++) {
        for ($j = 1; $j < $size - $i; $j++) {
            echo '  ';
        }
        for ($k = 1; $k <= $i + 1; $k++) {
            echo "$k ";
        }
        echo PHP_EOL;
    }
}