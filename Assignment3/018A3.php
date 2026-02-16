<?php
    $array1 = array(8, 2, 6, 4);
    $array2 = array(7, 1, 5, 3);

    sort($array1);
    sort($array2);

    $merged = array_merge($array1, $array2);
    sort($merged);

    print_r($merged);
?>
