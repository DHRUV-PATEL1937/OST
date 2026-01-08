<?php
    $s1 = 20 ; $s2 = 90 ; $s3 = 99 ; $s4 = 98 ; $s5 = 100;
    $total = $s1 + $s2 + $s3 + $s4 + $s5;
    echo "Total = " . $total;

    $per = ($total/5);
    echo "<br>Percentage = " . $per . "%<br>";

    switch ($per) {
        case $per>90:
            echo "Your Grade is O";
            break;

        case $per>81 && $per<=90:
            echo "Your grade is <b>A+</b>";
            break;

        case $per>71 && $per<=80:
            echo "Your grade is A";
            break;

        case $per>61 && $per<=70:
            echo "Your grade is B+";
            break;

        case $per>51 && $per<=60:
            echo "Your grade is B";
            break;

        case $per<51:
            echo "Fail";
            break;
    }
?>