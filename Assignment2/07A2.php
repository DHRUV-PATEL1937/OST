<?php
$x = 2;
$n = 5;
$sum = 0;
$fact = 1;
$powerX = 1;

echo "Series for x=$x, n=$n: ";

for ($i = 1; $i <= $n; $i++) {
    $fact = $fact * $i;
    $powerX = $powerX * $x;
    
    $term = $powerX / $fact; 
    $sum += $term;
    
    if ($i == 1) {
        echo "$term"; 
    } else {
        echo " + $term";
    }
}

echo "\nTotal Sum: $sum";
?>