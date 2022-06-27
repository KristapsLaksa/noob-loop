<?php

$size = readline('Enter the number: ');

for($i= 0; $i < $size; $i++)
{
    for($j = $size; $j > $i; $j--)
        echo "$j ";
    for($k = 1; $k <= $i*2; $k++)
        echo  '  ';
    for($m = $i + 1; $m <= $size; $m++)
        echo " $m";
    echo PHP_EOL;
}


