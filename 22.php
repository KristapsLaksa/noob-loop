<?php

$size  =  readline('Enter the number: ');
$direction= strtoupper(readline('Select direction (L/R) :'));

if($direction == 'R') {
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $i * 2; $j++) {
            echo ' ';
        }
        for ($k = 0; $k < $size - $i; $k++) {
            echo '*';
        }
        echo PHP_EOL;
    }

    for ($i = 0; $i < $size - 1; $i++) {
        for ($j = 0; $j < ((($size * 2) - ($i * 2)) - 4); $j++) {
            echo ' ';
        }
        for ($k = 0; $k < $i + 2; $k++) {
            echo '*';
        }
        echo PHP_EOL;
    }
}

elseif ($direction == 'L'){


    for ($i = 0; $i < $size-1; $i++) {
        for ($j = 0; $j < $size-$i-1; $j++) {
            echo ' ';
        }
        for ($k = 0; $k < $size - $i; $k++) {
            echo '*';
        }
        echo PHP_EOL;
    }

    echo '*'.PHP_EOL;

    for ($i = 0; $i < $size - 1; $i++) {
        for ($j = 0; $j <$i+1;$j++) {
            echo ' ';
        }
        for ($k = 0; $k < $i + 2; $k++) {
            echo '*';
        }
        echo PHP_EOL;
    }
}
