<?php
    $x = 2;
    $n = 5;
    $sum = 0;
    $fact = 1;

    echo "Series for x=$x, n=$n: ";

    for ($i = 1; $i <= $n; $i++) {
        $fact = $fact * $i;
        $numerator = pow($x, $i);
        $term = $numerator / $fact; 
        
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