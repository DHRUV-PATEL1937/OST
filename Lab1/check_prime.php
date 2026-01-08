<?php
    $a = 10;
    $flag = 0;

    if ($a <= 1) {
        $flag = 1;
    } else {
        for ($i = 2; $i < $a; $i++) {
            if ($a % $i == 0) {
                $flag = 1;
                break;
            }
        }
    }

    if ($flag == 0) {
        echo "Number is prime";
    } else {
        echo "Number is not prime";
    }
?>
