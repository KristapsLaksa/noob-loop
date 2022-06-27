<?php
$size  =  readline('Enter the number: ');

for ($i = $size; $i >= 1; $i--) {
    for ($j = 1; $j <  $i * 2; $j++) {
        if ($j % 2 === 0)
            echo '* ';
        else {
            echo ceil($j / 2) . ' ';
        }

    }
    echo PHP_EOL;
}