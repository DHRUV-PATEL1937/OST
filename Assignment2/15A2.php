<?php
    $num = 85924;
    $temp = $num;
    $small = 9;
    $large = 0;

    while ($temp > 0) {
        $digit = $temp % 10;
        
        if ($digit > $large) {
            $large = $digit;
        }
        
        if ($digit < $small) {
            $small = $digit;
        }
        
        $temp = (int)($temp / 10);
    }

    echo "Number: $num\n";
    echo "Smallest digit: $small\n";
    echo "Largest digit: $large";
?>