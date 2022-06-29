<?php

$size  =  readline('Enter the number: ');

//upper

for ($i=0;$i<$size;$i++){
    for($j =0;$j<$size*3;$j++){
        echo '_';
    }
    for($k=0;$k<$i+2;$k++){
       if($k==0 || $k==$i+1){
            echo '*';
       }
        else
        {
            echo '_';
        }
    }
    for ($l=0;$l<(($size*2)-2)-$i;$l++){
        echo '_';
    }
    echo PHP_EOL;
}

//middle

for ($i=0;$i<floor($size/2);$i++){
    for($j =0;$j<$size*3;$j++){
        echo '*';
    }
    for($k=0;$k<$size+1;$k++){
        if($k==0 || $k==$size){
            echo '*';
        }
        else
        {
            echo '_';
        }
    }
    for ($l=0;$l<$size-1;$l++){
        echo '_';
    }
    echo PHP_EOL;
}

//lower

for ($i=0;$i<floor($size/2);$i++){
    for($j =0;$j<($size*3)-$i;$j++){
        echo '_';
    }
    for($k=0;$k<($size+1)+($i*2);$k++){
        if($i==floor($size/2)-1
            || $k==0
            || $k==($size+1)+($i*2)-1){
            echo '*';
        }
        else
        {
            echo '_';
        }
    }
    for ($l=0;$l<($size-1)-$i;$l++){
        echo '_';
    }
    echo PHP_EOL;
}