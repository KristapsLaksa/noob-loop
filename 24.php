<?php

$size  =  readline('Enter the number: ');

//start

for($i=0;$i<$size-1;$i++){
    for($j=0;$j<($size-1)/2;$j++){
        echo '.';
    }
    for($k=0;$k<$size;$k++){
        if($i==0 || $k==0 || $k==$size-1){
            echo '#';
        }
        else
        {
        echo '.';
        }
    }
    for($l=0;$l<($size-1)/2;$l++){
        echo '.';
    }
    echo PHP_EOL;
}

//middle

for($i = 0; $i < 1; $i++){
    for($j = 0; $j < (($size-1)/2)+1; $j++) {
        echo '#';
    }
    for($k = 0; $k < $size-2; $k++) {
        echo '.';
    }
    for($l = 0; $l < (($size-1)/2)+1; $l++) {
        echo '#';
    }
    echo PHP_EOL;
}

//arrow
if($size % 2 == 0) {
    for ($i = 0; $i < $size - 1; $i++) {
        for ($j = 0; $j < $i + 1; $j++) {
            echo '.';
        }
        for ($k = 0; $k < ((2 * $size) - $i * 2) - 2; $k++) {
            if ($k == 0 || $k == ((2 * $size) - $i * 2) - 3) {
                echo '#';
            } else {
                echo '.';
            }
        }
        for ($l = 0; $l <= $i; $l++) {
            echo ".";
        }
        echo PHP_EOL;
    }
}
else
{
    for($i = 0; $i < $size-1; $i++) {
    for($j = 0; $j < $i+1; $j++) {
        echo '.';
    }
    for($k = 0; $k < 2 * ($size - $i) - 3; $k++) {
        if($k==0 || $k ==2 * ($size - $i) - 4){
            echo '#';
        }
        else
        {
            echo '.';
        }
    }
    for($l = 0; $l <= $i; $l++) {
        echo ".";
    }
    echo PHP_EOL;
}
}