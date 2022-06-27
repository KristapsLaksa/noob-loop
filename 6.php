<?php

$size=readline('Enter number : ');


for($i=0 ;$i<$size;$i++){
    for($j=0 ;$j<=$i;$j++){
        echo '.';

    }  for($k=$i ;$k<$size;$k++) {
        echo '*';
    }
        echo PHP_EOL;
}

