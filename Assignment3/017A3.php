<?php
    $date1 = date_create("2024-01-01");
    $date2 = date_create("2024-01-15");

    $diff = date_diff($date1, $date2);
    echo $diff->days;
?>
