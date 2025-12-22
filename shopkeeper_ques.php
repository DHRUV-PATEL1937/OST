<?php
    // 11. One shopkeeper selling 5kg sweet with rs 430 per kg to 15 persons in 1 day write a php
    //  code to calculate amount of sweet shopkeeper selling in one month.
    $sweet = 5;
    $rs = 430;
    $persons = 15;
    echo "Total amount shopkeeper selling in one month is : " . $sweet * $rs * $persons * 30 . " and " . $sweet*30 . " Kg sweet " . " to " . $persons*30 . " persons. <br><br>";
    echo "Total amount shopkeeper selling in one week is : " . $sweet * $rs * $persons * 7 . " and " . $sweet*7 . " Kg sweet " . " to " . $persons*7 . " persons. <br><br>";
    echo "Total amount shopkeeper selling in one day is : " . $sweet * $rs * $persons . " and " . $sweet . " Kg sweet " . " to " . $persons . " persons. <br>";
?>
