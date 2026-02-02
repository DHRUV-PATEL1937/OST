<?php
$x = 2;
$n = 5;
$sum = 1;
$fact = 1;
$powerX = 1;

echo "Series for x=$x, n=$n: 1";

for ($i = 1; $i < $n; $i++) {
    $fact = $fact * $i;
    $powerX = $powerX * $x;
    $term = $powerX / $fact;

    if ($i % 2 != 0) {
        $sum -= $term;
        echo " - $term";
    } else {
        $sum += $term;
        echo " + $term";
    }
}

echo "\nTotal Sum: $sum";
?>