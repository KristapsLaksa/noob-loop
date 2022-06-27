<?php

$size = readline('Enter the number: ');
$shiftSize = 4;
//upper loop
for($i=0;$i<1;$i++){
   for($j=0;$j<1;$j++){
           echo str_pad("*",$shiftSize/2,' ',STR_PAD_LEFT);
       }
    for($k=0;$k<1;$k++){
        echo str_pad("|",$shiftSize/2,' ',STR_PAD_LEFT);
    }
    for($l=1;$l<=$size;$l++){
        echo str_pad("$l",$shiftSize,' ',STR_PAD_LEFT);
    }
   echo PHP_EOL;
}

//middle
for($i=0;$i<1;$i++){
    for($j=0;$j<(($size*$shiftSize)+$shiftSize);$j++){
        echo str_pad("-",1,' ',STR_PAD_BOTH);
    }
    echo PHP_EOL;
}

//lower

for($i=1;$i<=$size;$i++){
    for($j=0;$j<=$size+2;$j++) {
        if ($j == 1) {
            echo str_pad($i,$shiftSize/2,' ',STR_PAD_LEFT);
        }
        if ($j == 2) {
            echo str_pad(' |',$shiftSize/2,' ',STR_PAD_LEFT);
        }
        if($j >= 3)
        {
            echo str_pad(($j-2)*$i,$shiftSize,' ',STR_PAD_LEFT);;
        }

    }
    echo PHP_EOL;
}