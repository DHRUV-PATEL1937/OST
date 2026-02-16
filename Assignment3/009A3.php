<?php

    function showMessage()
    {
        echo "No argument No return<br>";
    }
    showMessage();

    function add($a, $b)
    {
        echo "With argument No return : " . ($a + $b) . "<br>";
    }
    add(10, 20);

    function getNumber()
    {
        return 5;
    }
    echo "No argument With return : " . getNumber() . "<br>";

    function multiply($x, $y)
    {
        return $x * $y;
    }
    echo "With argument With return : " . multiply(4, 5);

?>
