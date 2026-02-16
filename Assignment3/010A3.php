<?php

    function sum($a, $b)
    {
        return $a + $b;
    }

    function power($base, $exp)
    {
        $result = 1;
        for ($i = 1; $i <= $exp; $i++) {
            $result = $result * $base;
        }
        return $result;
    }

    function prime($n)
    {
        if ($n <= 1) return "Not Prime";
        for ($i = 2; $i <= $n / 2; $i++) {
            if ($n % $i == 0) return "Not Prime";
        }
        return "Prime";
    }

    function maxValue($arr)
    {
        return max($arr);
    }

    function minValue($arr)
    {
        return min($arr);
    }

    function factors($n)
    {
        $f = array();
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) {
                $f[] = $i;
            }
        }
        return $f;
    }

    function factorial($n)
    {
        $fact = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fact = $fact * $i;
        }
        return $fact;
    }

    function sort_array($arr)
    {
        sort($arr);
        return $arr;
    }

    function series($n)
    {
        $s = array();
        for ($i = 1; $i <= $n; $i++) {
            $s[] = $i;
        }
        return $s;
    }

    echo sum(10, 20) . "<br>";
    echo power(2, 5) . "<br>";
    echo prime(7) . "<br>";
    echo maxValue(array(2, 8, 4)) . "<br>";
    echo minValue(array(2, 8, 4)) . "<br>";
    print_r(factors(12));
    echo "<br>";
    echo factorial(5) . "<br>";
    print_r(sort_array(array(5, 2, 9)));
    echo "<br>";
    print_r(series(5));

?>
