<?php
    $n = 7; 
    $sum = 0;

    echo "Series for n=$n: ";

    for ($i = 1; $i <= $n; $i++) {
        $term = $i * $i;
        
        if ($i == 1 || $i % 2 == 0) {
            $sum += $term;
            if ($i == 1) {
                echo "$term";
            } else {
                echo " + $term";
            }
        } else {
            $sum -= $term;
            echo " - $term";
        }
    }

    echo "\n";
    echo "Total Sum: " . $sum;
?>