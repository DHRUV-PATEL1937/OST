<?php
    $n = 7;
    $t1 = 0;
    $t2 = 1;
    $sum = 0;

    echo "Series: ";

    for ($i = 1; $i <= $n; $i++) {
        echo "$t1 ";
        $sum += $t1;
        
        $nextTerm = $t1 + $t2;
        $t1 = $t2;
        $t2 = $nextTerm;
    }

    echo "\nTotal Sum: $sum";
?>