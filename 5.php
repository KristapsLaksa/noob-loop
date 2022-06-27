<?php
$size = (int) readline('Enter the number: ');


// reversed pyramid star pattern
for ($i = 1; $i <= $size - 1; $i++) {
    // printing spaces
    for ($j = 1; $j < $i; $j++) {
        echo ".";
    }
    // printing star
    for ($k = ($size - $i) * 2 - 1; $k >= 1; $k--) {
        if ($k === 1 || $k === ($size - $i) * 2 - 1) {
            echo "*";
        }
        else {
            echo ".";
        }
    }
    //printing right side spaces
    for ($m = 1; $m <= $i - 1; $m++) {
        echo ".";
    }
    echo PHP_EOL;
}

//triangle
for ($i = 2; $i < $size; $i++) {
    // printing spaces
    for ($j = $size -1 ; $j > $i; $j--) {
        echo ".";
    }
    // printing star
    for ($k = 0; $k < $i * 2 - 1; $k++) {
        if ($k === 0 || $k === 2 * $i - 2) {
            echo "*";
        }
        else {
            echo ".";
        }
    }
    //printing right side spaces
    for ($m = $i +1; $m < $size; $m++) {
        echo ".";
    }

    echo PHP_EOL;
}
?>
}