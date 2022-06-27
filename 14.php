<?php

$size=readline('Enter number : ');
$splitSize = ceil($size/2);
$downsize = $size - $splitSize;


// upper triangle
if ($size % 2 == 0) {
for($q=0;$q<($splitSize-1);$q++) {
        for ($y = 0; $y < ($splitSize-1) - $q; $y++) {
            echo '-';
        }
        for ($b = 0; $b < 2 * $q + 2; $b++) {
           if ($b == 0 || $b == 2* $q + 1) {
                echo '*';
           } else {
             echo '-';
          }
        }
            for ($u = 0; $u < ($splitSize-1) - $q; $u++) {
                echo '-';
            }
            echo PHP_EOL;
        }
    }



    else
    { for($i=0;$i<$splitSize;$i++) {
        for ($j = 0; $j < $splitSize - $i - 1; $j++) {
            echo '-';
        }
        for ($k = 0; $k < 2 * $i + 1; $k++) {
            if ($k == 0 || $k == 2 * $i) {
                echo '*';
            } else {
                echo '-';
            }
        }
        for ($l = 0; $l < $splitSize - $i - 1; $l++) {
            echo '-';
        }
        echo PHP_EOL;
    }
}

    //lower triangle
for($e=0;$e<$downsize;$e++){
    // if number is even
    if($size%2==0){
        for($m=0; $m <$e;$m++){
            echo '-';
        }
        for($h=($downsize-$e)*2; $h>=1;$h--) {
            if ($h == 1 || $h == ($downsize-$e)*2) {
                echo '*';
            } else {
                echo '-';
            }
        }
        for($x=0;$x < $e;$x++){
            echo '-';
        }
        echo PHP_EOL;
    }


    //if number is odd

    else
    {
     for($o=0; $o <$e+1;$o++){
         echo '-';
     }
     for($p=($downsize-$e)*2-1; $p>=1;$p--) {
         if ($p == 1 || $p == ($downsize-$e)*2-1) {
             echo '*';
         } else {
             echo '-';
         }
     }
     for($s=0;$s < $e+1;$s++){
         echo '-';
     }
    echo PHP_EOL;
}
}