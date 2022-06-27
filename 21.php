<?php

$size  =  readline('Enter the number: ');

for ($i = 0; $i < $size - 2; $i++) {
    for ($j = 1; $j < $size * 2 - 3 ; $j++) {
        if ($j === $size - 1) {
            echo '\\';
        }
        if ($j === $size - 1) {
            echo ' ';
        }
        if ($j === $size - 1) {
            echo '/';
        }
        if ($i % 2 !== 0) {
            echo '-';
        } else {
            echo '*';
        }

    }
    echo  PHP_EOL;
}

for ($i = 0; $i <1; $i++) {
    for ($j = 0; $j <= $size * 2 - 2; $j++) {
        if ($j === $size - 1) {
            echo "@";
        } else {
            echo ' ';
        }
    }
   echo  PHP_EOL;
}

for ($i = 0; $i < $size - 2; $i++) {
    for ($j = 1; $j < $size * 2 - 3 ; $j++) {
        if ($j === $size - 1) {
            echo '/';
        }
        if ($j === $size - 1) {
            echo ' ';
        }
        if ($j === $size - 1) {
            echo '\\';
        }
        if ($i % 2 !== 0) {
            echo '-';
        } else {
            echo '*';
        }

    }
    echo  PHP_EOL;
}