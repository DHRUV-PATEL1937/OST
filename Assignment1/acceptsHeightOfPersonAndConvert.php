<?php
    $height_cm = 170;

    $total_inches = $height_cm / 2.54;

    $feet = floor($total_inches / 12);
    $inches = ($total_inches % 12);

    echo "Height: " . $height_cm . " cm<br>";
    echo "Height in Feet and Inches: " . $feet . " feet " . $inches . " inches";
?>
