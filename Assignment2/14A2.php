<?php
    $num = 55899;
    $lastDigit = $num % 10;
    $firstDigit = $num;

    while ($firstDigit >= 10) {
        $firstDigit = (int)($firstDigit / 10);
    }

    $sum = $firstDigit + $lastDigit;

    echo "Number: $num\n";
    echo "Sum of first and last digit: $sum";
?>