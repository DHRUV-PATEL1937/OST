<?php
    $n = 5;
    $sum = 0;
    $term = 1;
    echo "Series for n=$n: ";

    for ($i = 1; $i <= $n; $i++) {
        $term = ($term + 1) * $i;
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