<?php
    $num = 157;
    $temp = $num;
    $isOctal = true;

    while ($temp > 0) {
        $digit = $temp % 10;
        
        if ($digit >= 8) {
            $isOctal = false;
            break;
        }
        
        $temp = (int)($temp / 10);
    }

    if ($isOctal) {
        echo "$num is an Octal Number";
    } else {
        echo "$num is not an Octal Number";
    }
?>