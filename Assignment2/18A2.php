<?php
    $num = 153;
    $sum = 0;
    $temp = $num;
    $digits = strlen((string)$num);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $digits);
        $temp = (int)($temp / 10);
    }

    if ($num == $sum) {
        echo "$num is an Armstrong Number";
    } else {
        echo "$num is not an Armstrong Number";
    }
?>