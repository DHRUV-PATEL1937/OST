<?php
    $array = array(10, 20, 30, 40);
    $choice = 2;

    switch ($choice) {
        case 1:
            array_push($array, 50);
            print_r($array);
            break;

        case 2:
            unset($array[1]);
            print_r($array);
            break;

        case 3:
            $array[2] = 35;
            print_r($array);
            break;

        case 4:
            if (in_array(30, $array)) {
                echo "Element Found";
            } else {
                echo "Element Not Found";
            }
            break;
    }
?>
