<?php
    $array = array(1, 2, 3, 4, 5, 6, 7, 8);

    $even = 0;
    $odd = 0;

    foreach ($array as $value) {
        if ($value % 2 == 0) {
            $even++;
        } else {
            $odd++;
        }
    }

    echo "Even = " . $even . "<br>";
    echo "Odd = " . $odd;
?>
