<?php

$size=(int) readline('Enter number : ');
$direction=readline('Select direction (right/left) : ');
$emptyOrNot=readline('Is it empty (y/n) : ');


if($direction == 'right' && $emptyOrNot == 'n'){
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo ' ';
        }
        for ($k = 0; $k < $size; $k++) {
            echo '*';
        }
        echo PHP_EOL;
    }
}

if($direction == 'right' && $emptyOrNot == 'y'){
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo ' ';
        }
        for ($k = 0; $k < $size; $k++) {
            if($i==0||$i==$size-1||$k==0||$k==$size-1){
                echo '*';
            }
            else
            {
                echo ' ';
            }
        }
        echo PHP_EOL;
    }

}

if($direction == 'left' && $emptyOrNot == 'n'){
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size-$i; $j++) {
            echo ' ';
        }
        for ($k = 0; $k < $size; $k++) {
            echo '*';
        }
        echo PHP_EOL;
    }
}

if($direction == 'left' && $emptyOrNot == 'y'){
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size-$i; $j++) {
            echo ' ';
        }
        for ($k = 0; $k < $size; $k++) {
            if($i==0||$i==$size-1||$k==0||$k==$size-1){
                echo '*';
            }
            else
            {
                echo ' ';
            }
        }
        echo PHP_EOL;
    }
}