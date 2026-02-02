<?php
    $num = 5623;
    $reverse = 0;
    $temp = $num;

    while ($temp > 0) {
        $digit = $temp % 10;
        $reverse = ($reverse * 10) + $digit;
        $temp = (int)($temp / 10);
    }

    echo "Original Number: $num\n";
    echo "Reverse Number: $reverse";
?>