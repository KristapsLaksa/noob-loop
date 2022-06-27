<?php

$size=readline('Enter number : ');
echo PHP_EOL;
$r = 5;
$co = 0;


for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j <= $size - $i; $j++) {
        echo '  ';
    }

    for ($k = 0; $k <= $i; $k++) {
        if ($k == 0 || $i == 0)
            $co = 1;
        else
            $co = $co * ($i - $k + 1) / $k;
        echo $co . '   ';
    }
    echo PHP_EOL;
}