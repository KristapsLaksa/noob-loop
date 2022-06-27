<?php

$size=(int) readline('Enter number : ');
$input = readline('What should we print on it? ');
$upper = 3;
$lower = $size-$upper-4;
$inputLength = strlen($input);
$starLength = intval(floor(($size-$inputLength)/2));


for($i=0;$i<$upper;$i++){
    for($j=0;$j<2-$i;$j++){
        echo ' ';
    }
    for($k=0;$k < ($i*2)+5;$k++){
        echo '*';
    }
    for($l=0;$l<$upper-($i*2)+2;$l++){
        echo ' ';
    }
    for($o=0;$o< ($i*2)+5;$o++){
        echo '*';
    }
    echo PHP_EOL;
}

if($input == '') {
    for ($q = 0; $q < 10; $q++) {
        for ($w = 0; $w < $q; $w++) {
            echo ' ';
        }
        for ($e = 0; $e < $size - ($q * 2); $e++) {
            echo '*';
        }
        echo PHP_EOL;
    }
}
else
{
if($size % 2 == 0){
    if($inputLength%2==0){
        echo str_repeat('*',$starLength).$input.str_repeat('*',$starLength).PHP_EOL;
    }
    else
    {
        echo str_repeat('*',$starLength).$input.str_repeat('*',$starLength+1).PHP_EOL;
    }


}
else
{
    if($inputLength%2==0){
    echo str_repeat('*',$starLength).$input.str_repeat('*',$starLength+1).PHP_EOL;
    }
    else
    {
        echo str_repeat('*',$starLength).$input.str_repeat('*',$starLength).PHP_EOL;
    }
}
    for ($q = 1; $q <= 10; $q++) {
        for ($w = 0; $w < $q; $w++) {
            echo ' ';
        }
        for ($e = 0; $e < $size - ($q * 2); $e++) {
            echo '*';
        }
        echo PHP_EOL;
    }
}

