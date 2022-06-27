<?php

$size=(int) readline('Enter number : ');
$half = floor($size/2);

//upper

for($i=0;$i<1;$i++){
    for($j=0;$j<$half+1;$j++){
        if($j==0){
            echo '/';
        }
        if($j==$half){
            echo '\\';
        }
        else
        {
        echo '^';
        }
    }
    if($half != 1){
    for($k=0;$k<$half;$k++){
        echo '_';
    }
    }
    for($l=0;$l<$half+1;$l++){
        if($l==0){
            echo '/';
        }
        if($l==$half){
            echo '\\';
        }
        else
        {
            echo '^';
        }
    }
    echo PHP_EOL;
}

//middle

    for ($a = 0; $a < $size -2; $a++) {
        for ($s = 0; $s < $half + 2; $s++) {
            if ($s == 0) {
               echo '|';
            } else {
                echo ' ';
            }
        }
        if($half!=1) {
            for ($d = 0; $d < $half; $d++) {
                if ($a == $size - 3) {
                    echo '_';
                } else {
                    echo ' ';
                }
            }
        }
        for ($f = 0; $f < $half + 2; $f++) {
            if ($f == $half +1) {
               echo '|';
            } else {
                echo ' ';
            }
        }
        echo PHP_EOL;

    }



//lower

for($q=0;$q<1;$q++){
    for($w=0;$w<$half+1;$w++){
        if($w==0){
            echo '\\';
        }
        if($w==$half){
            echo '/';
        }
        else
        {
            echo '_';
        }
    }
    if($half!= 1){
    for($e=0;$e<$half;$e++){
        echo ' ';
    }
    }
    for($r=0;$r<$half+1;$r++){
        if($r==0){
            echo '\\';
        }
        if($r==$half){
            echo '/';
        }
        else
        {
            echo '_';
        }
    }
    echo PHP_EOL;
}