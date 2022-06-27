<?php

$size=readline('Enter number : ');

for($i=0;$i <$size;$i++){
    for($j=0;$j<$size*2;$j++){
        if($i==0 || $i == $size-1 || $j == 0 || $j == ($size*2)-1){
            echo '*';
        }
        else
        {
            echo '/';
        }
    }
    for($k=0;$k<$size;$k++){
        if($i==ceil($size/2)-1){
            echo '|';
        }
        else
        {
            echo ' ';
        }
    }
    for($l=0;$l<$size*2;$l++){
        if($i==0 || $i == $size-1 || $l == 0 || $l == ($size*2)-1){
            echo '*';
        }
        else
        {
            echo '/';
        }
    }

    echo PHP_EOL;
}

