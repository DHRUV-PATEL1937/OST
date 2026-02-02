<?php
    $num = 12345;
    $sum = 0;
    $temp = $num;

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += $digit;
        $temp = (int)($temp / 10);
    }

    echo "Sum of digits of $num is: $sum";
?>