<?php

$size=readline('Enter number : ');
$shape = readline('Enter shape : ');

for($i=0 ;$i<$size;$i++){
    for($j=0 ;$j<=$i;$j++){
        echo $shape;

    } echo PHP_EOL;
}

