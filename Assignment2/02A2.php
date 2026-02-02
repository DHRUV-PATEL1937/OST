<?php
    $n = 5;
    $sum = 0;
    $fact = 1;

    echo "Series for n=$n: ";

    for ($i = 1; $i <= $n; $i++) {
        $fact = $fact * $i;
        $sum += $fact;
        
        if ($i == 1) {
            echo "$fact";
        } else {
            echo " + $fact";
        }
    }

    echo "\n";
    echo "Total Sum: " . $sum;
?>