<?php
    $number = 45827;

    $num = $number;
    $lastDigit = $num % 10;

    while ($num >= 10) {
        $num = (int)($num / 10);
    }

    $firstDigit = $num;

    echo "First Digit: " . $firstDigit . "<br>";
    echo "Last Digit: " . $lastDigit;
?>
