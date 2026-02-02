<?php
$num = 153;
$sum = 0;
$temp = $num;

$digits = 0;
$countTemp = $num;
while ($countTemp > 0) {
    $digits++;
    $countTemp = (int)($countTemp / 10);
}


while ($temp > 0) {
    $digit = $temp % 10;
    
    $powerValue = 1;
    for ($i = 1; $i <= $digits; $i++) {
        $powerValue = $powerValue * $digit;
    }
    
    $sum += $powerValue;
    $temp = (int)($temp / 10);
}

if ($num == $sum) {
    echo "$num is an Armstrong Number";
} else {
    echo "$num is not an Armstrong Number";
}
?>