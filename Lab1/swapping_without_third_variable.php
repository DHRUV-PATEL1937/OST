<?php 
    $a = 10;
    $b = 20;
    echo "Before swap A = " . $a ." and B = ". $b;
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "<br>After swap A= ". $a ." and B = ". $b;
?>