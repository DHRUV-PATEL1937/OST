<?php
    $x = 2;
    $n = 5;
    $sum = 0;
    $term = 1;

    echo "Series for x=$x, n=$n: ";

    for ($i = 1; $i <= $n; $i++) {
        $term = $term * $x;
        $sum += $term;
        
        if ($i == 1) {
            echo "$term";
        } else {
            echo " + $term";
        }
    }

    echo "\nTotal Sum: $sum";
?>