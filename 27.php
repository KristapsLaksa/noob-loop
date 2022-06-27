<?php

$size = readline('Enter the number: ');

for($i=0;$i<$size;$i++){
    for($j=0;$j<$size;$j++){
        if($i % 2 != 0){
           echo str_pad(' #',2,' ',STR_PAD_BOTH);
        }
        else
        {
            echo str_pad('#',2,' ',STR_PAD_RIGHT);
        }
    }
    echo PHP_EOL;
}