<?php


$size=readline('Enter number : ');

for($i = 0; $i <= $size; $i++) {
       for($j = 0; $j < $size-$i; $j++) {
        echo ' ';
    }

    for($k = 0; $k < 2 * $i + 1; $k++) {
            if($k===$i){
                echo ' | ';
            }else{
                echo "*";
        }
    }
    echo PHP_EOL;
}

