<?php
    $num = 10101;
    $temp = $num;
    $isBinary = true;

    while ($temp > 0) {
        $digit = $temp % 10;
        
        if ($digit > 1) {
            $isBinary = false;
            break;
        }
        
        $temp = (int)($temp / 10);
    }

    if ($isBinary) {
        echo "$num is a Binary Number";
    } else {
        echo "$num is not a Binary Number";
    }
?>