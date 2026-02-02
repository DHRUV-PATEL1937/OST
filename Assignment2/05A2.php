<?php
    $n = 5;
    $sum = 0;

    echo "Series for n=$n: ";

    for ($i = 1; $i <= $n; $i++) {
        $odd = 2 * $i - 1;
        $square = $odd * $odd;
        
        if ($i % 2 != 0) {
            $term = $square + 2;
        } else {
            $term = $square - 2;
        }

        $sum += $term;
        
        if ($i == 1) {
            echo "$term";
        } else {
            echo ", $term";
        }
    }

    echo "\n";
    echo "Total Sum: " . $sum;
?>