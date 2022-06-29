<?php

$size  =  readline('Enter the number: ');

// upper line

for($i=0;$i<1;$i++){
    for($j=0;$j<$size+1;$j++){
        echo '.';
    }
    for($k=0;$k<($size*2)+1;$k++){
        echo '_';
    }
    for($l=0;$l<$size+1;$l++){
        echo '.';
    }
    echo PHP_EOL;
}

// upper main

for($i=0;$i<$size;$i++){
    for($j=0;$j<$size-$i;$j++){
        echo '.';
    }
    for($k=0;$k<(($size*2)+3)+($i*2);$k++){
        if($k==0 || $k == 1 ){
            echo '/';
        }
        elseif ($k==(($size*2)+3)+($i*2)-2 || $k == (($size*2)+3)+($i*2)-1){
            echo '\\';
        }
        else
        {
        echo '_';
        }
    }
    for($l=0;$l<$size-$i;$l++){
        echo '.';
    }
    echo PHP_EOL;
}

//STOP!

for($i=0;$i<1;$i++){
    for($j=0;$j<($size*2)-1;$j++){
        if($j==0||$j==1){
            echo'/';
        }
        else
        {
            echo '_';
        }
    }
    echo 'STOP!';

    for($j=0;$j<($size*2)-1;$j++){
        if($j==($size*2)-3||$j==($size*2)-2){
            echo'\\';
        }
        else
        {
            echo '_';
        }

}
    echo PHP_EOL;
}

//upper lower
for($i=0;$i<1;$i++){
    for($j=0;$j<($size*2)-1;$j++){
        if($j==0||$j==1){
            echo'\\';
        }
        else
        {
            echo '_';
        }
    }
    echo str_repeat('_',5);

    for($j=0;$j<($size*2)-1;$j++){
        if($j==($size*2)-3||$j==($size*2)-2){
            echo'/';
        }
        else
        {
            echo '_';
        }

    }
    echo PHP_EOL;
}

// lower

for($i=0;$i<$size-1;$i++){
    for($j=0;$j<$i+1;$j++){
        echo '.';
   }
    for($k=0;$k<(($size*4)+1)-(($i)*2);$k++){
        if($k==0 || $k == 1 ){
            echo '\\';
       }
        elseif ($k==(($size*4)+1)-(($i)*2)-2 || $k == (($size*4)+1)-(($i)*2)-1){
            echo '/';
      }
       else
      {
            echo '_';
        }
    }
    for($l=0;$l<$i+1;$l++){
        echo '.';
    }
    echo PHP_EOL;
}

