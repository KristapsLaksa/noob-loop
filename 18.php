<?php

$size=(int) readline('Enter number : ');

$c = 4;


for ($i = 1; $i <= $size; $i++) {

    for ($j = $i; $j >= 1; $j--) {
        $pow = pow(2, $j) / 2;
        $space = $c - strlen($pow);
        $insertedSpace = str_repeat(' ', $space);
        echo $insertedSpace . $pow;
    }
    echo PHP_EOL;
}