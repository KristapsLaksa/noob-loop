<?php

$size=readline('Enter number : ');

for($i=0;$i<$size;$i++){
    for($j=0;$j<=$i;$j++){
            echo chr(65+$i)." ";
}echo PHP_EOL;
}


