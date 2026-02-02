<?php
    $num = 23569;
    $temp = $num;
    $evenCount = 0;
    $oddCount = 0;
    $evenSum = 0;
    $oddSum = 0;

    while ($temp > 0) {
        $digit = $temp % 10;
        
        if ($digit % 2 == 0) {
            $evenCount++;
            $evenSum += $digit;
        } else {
            $oddCount++;
            $oddSum += $digit;
        }
        
        $temp = (int)($temp / 10);
    }

    echo "Number: $num\n";
    echo "Odd digits count: $oddCount\n";
    echo "Even digits count: $evenCount\n";
    echo "Sum of odd digits: $oddSum\n";
    echo "Sum of even digits: $evenSum";
?>