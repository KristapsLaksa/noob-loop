<?php

$size = readline('Enter the number: ');
$type = readline ('Select the type: (a/ b/ c/ d) ');

if ($type === 'a') {
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo '# ';
        }
        echo PHP_EOL;
    }
}

if ($type === 'b') {
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size - $i; $j++) {
            echo '# ';
        }
        echo PHP_EOL;
    }
}

if ($type === 'c') {
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo '  ';
        }
        for ($k = 0; $k < $size - $i; $k++) {
            echo '# ';
        }
        echo PHP_EOL;
    }
}

if ($type === 'd') {
    for ($i = 0; $i < $size; $i++) {
        for ($j = 1; $j < $size - $i; $j++) {
            echo '  ';
        }
        for ($k = 0; $k <= $i; $k++) {
            echo '# ';
        }
        echo PHP_EOL;
    }
}