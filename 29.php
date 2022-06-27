<?php

$size  =  readline('Enter the number: ');
$type = readline('Select the type: (a/b/c/d) : ');


if($type=='a') {
    for ($i = 0; $i < $size; $i++) {

        for ($j = 0; $j < $size - $i - 1; $j++) {
            echo '  ';
        }
        // print stars
        for ($k = 0; $k < 2 * $i + 1; $k++) {
            echo '# ';
        }
        echo PHP_EOL;
    }
}

if($type=='b'){
    $size = 5;
    for($i = 0; $i < $size; $i++) {

        for($j = 0; $j < $i; $j++) {
            echo '  ';
        }
        for($k = 0; $k < 2 * ($size - $i) - 1; $k++) {
            echo '# ';
        }
        echo PHP_EOL;
    }

}

if($type=='c') {
for ($i = 1; $i <= $size; $i++) {

    for ($j = $size; $j > $i; $j--) {
        echo '  ';
    }

    for ($k = 0; $k < $i * 2 - 1; $k++) {
        echo '# ';
    }
    echo PHP_EOL;
}

for ($i = 1; $i <= $size - 1; $i++) {

    for ($j = 0; $j < $i; $j++) {
        echo '  ';
    }

    for ($k = ($size - $i) * 2 - 1; $k > 0; $k--) {
        echo '# ';
    }
    echo PHP_EOL;
}

}

if($type=='d'){
    for ($i = 1; $i <= $size; $i++) {
        if ($i == 1) {
            echo str_repeat('# ', $size+($size-1)).PHP_EOL;
        }
        else
        {
            for ($j = $size; $j >= $i; $j--) {
                echo "# ";
            }
            for ($k = 1; $k < ($i * 2) - 2; $k++) {
                echo '  ';

            }
            for ($k = 0; $k < $size - $i + 1; $k++) {
                echo "# ";
            }
            echo PHP_EOL;
        }
    }


    for ($i = 2; $i <= $size; $i++) {
        if ($i == $size) {
            echo str_repeat('# ', $size+($size-1)).PHP_EOL;
        } else {

            for ($j = 0; $j < $i; $j++) {
                echo "# ";
            }
            for ($k = 0; $k < 2 * ($size - $i) - 1; $k++) {
                echo "  ";
            }
            for ($k = 0; $k <= $i - 1; $k++) {
                echo "# ";
            }
            echo PHP_EOL;
        }
    }
}


