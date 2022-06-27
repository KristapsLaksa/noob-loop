<?php

$size=readline('Enter number : ');

$upper = ceil($size/2);
$lower = $size-$upper;
// Upper figure
for($i=0;$i<$upper;$i++){
    for($j=0;$j<=$upper-$i-2;$j++){
        echo '-';
    }
    if($size%2==0){
        for ($k=0;$k<2*$i+2;$k++) {
            echo '*';
        }
    }
    else
    {
    for ($k=0;$k<2*$i+1;$k++) {
    echo '*';
    }
    }
    for($l=0;$l<=$upper-$i-2;$l++){
        echo '-';
    }
    echo PHP_EOL;
    }



//Lower figure
for($p=0;$p<$lower;$p++){
    for($o=0;$o<$size;$o++){
        if($o==0 || $o == $size-1){
            echo '|';
        }
        else
        {
        echo '*';
        }
    } echo PHP_EOL;
}