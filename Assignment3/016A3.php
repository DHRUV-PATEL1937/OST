<?php
    $array = array(45, 12, 78, 34, 89);

    $asc = $array;
    sort($asc);

    $desc = $array;
    rsort($desc);

    print_r($asc);
    echo "<br>";
    print_r($desc);
?>
