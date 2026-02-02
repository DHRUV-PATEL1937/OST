<?php
    $x = 2;
    $n = 5;
    $sum = 0;

    echo "Series for x=$x, n=$n: ";

    for ($i = 1; $i <= $n; $i++) {
        $term = pow($x, $i);
        $sum += $term;
        
        if ($i == 1) {
            echo "$term";
        } else {
            echo " + $term";
        }
    }

    echo "\n";
    echo "Total Sum: " . $sum;
?>