<?php
    $array = array(-3, 5, 0, -1, 8, 0, 2);

    $positive = 0;
    $negative = 0;
    $zero = 0;

    foreach ($array as $value) {
        if ($value > 0) {
            $positive++;
        } elseif ($value < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }

    echo "Positive = " . $positive . "<br>";
    echo "Negative = " . $negative . "<br>";
    echo "Zero = " . $zero;
?>
