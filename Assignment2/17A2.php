<?php
    $num = 121;
    $reverse = 0;
    $temp = $num;

    while ($temp > 0) {
        $digit = $temp % 10;
        $reverse = ($reverse * 10) + $digit;
        $temp = (int)($temp / 10);
    }

    if ($num == $reverse) {
        echo "$num is a Palindrome Number";
    } else {
        echo "$num is not a Palindrome Number";
    }
?>