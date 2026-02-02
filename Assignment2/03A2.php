<?php
    $n = 5;
    $sum = 0;

    echo "Series for n=$n: ";

    for ($i = 1; $i <= $n; $i++) {
        $term = 1 / ($i * $i);
        $denominator = $i * $i;

        if ($i % 2 != 0) {
            $sum += $term;
            if ($i == 1) {
                echo "1";
            } else {
                echo " + 1/$denominator";
            }
        } else {
            $sum -= $term;
            echo " - 1/$denominator";
        }
    }

    echo "\n";
    echo "Total Sum: " . $sum;
?>