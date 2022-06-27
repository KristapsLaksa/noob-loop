<?php

$size  =  readline('Enter the number: ');

for($i=0;$i<$size;$i++){
    for($j=0;$j<$i*2;$j++){
        echo '-';
    }
    for($k=0;$k<$size-$i;$k++){
        echo '*';
    }
    echo PHP_EOL;
}

for($i=0;$i<$size-1;$i++){
    for($j=0;$j<=$size-($i*2);$j++){
        echo '^';
    }
    for($k=0; $k<$i+2;$k++){
        echo '*';
    }
    echo PHP_EOL;
}

//  for($j=0;$j<=$size-($i*2);$j++){