<?php
    function table($n, $i = 1)
    {
        if ($i > 10) {
            return;
        }
        echo $n . " x " . $i . " = " . ($n * $i) . "<br>";
        table($n, $i + 1);
    }

    table(5);
?>
