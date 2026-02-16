<?php
    $array = array(1, 2, 2, 3, 4, 4, 5);

    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] == $array[$j]) {
                array_splice($array, $j, 1);
                $j--;
            }
        }
    }

    print_r($array);
?>
