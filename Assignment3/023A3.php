<?php
    $A = array(1, 2, 5, 8, 10, 15, 25, 35, 50, 100);

    $D1 = array();
    $D2 = array();
    $D3 = array();

    for ($i = 0; $i < count($A) - 1; $i++) {
        $D1[] = $A[$i + 1] - $A[$i];
    }

    for ($i = 0; $i < count($D1) - 1; $i++) {
        $D2[] = $D1[$i + 1] - $D1[$i];
    }

    for ($i = 0; $i < count($D2) - 1; $i++) {
        $D3[] = $D2[$i + 1] - $D2[$i];
    }

    print_r($D1);
    echo "<br>";
    print_r($D2);
    echo "<br>";
    print_r($D3);
?>
