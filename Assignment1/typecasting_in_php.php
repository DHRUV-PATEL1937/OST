<?php
// double
$double = 12.21;
$i1 = (int)$double;
$f1 = (float)$double;
$s1 = (string)$double;
$a1 = (array)$double;

// int
$int = 10;
$d1 = (double)$int;
$f2 = (float)$int;
$s2 = (string)$int;
$a2 = (array)$int;

// float
$float = 20.2;
$i2 = (int)$float;
$d2 = (double)$float;
$s3 = (string)$float;
$a3 = (array)$float;

// string
$string = "2.1";
$i3 = (int)$string;
$d3 = (double)$string;
$f3 = (float)$string;
$a4 = (array)$string;

// array
$array = ["20.1"];
$i4 = (int)$array;
$d4 = (double)$array;
$f4 = (float)$array;


echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>PHP Type Casting</title>
        </head>
        <body>
        <center>
        <table border="1" style="text-align:center;">
            <tr>
                <th>Variable Name</th>
                <th>Variable Type</th>
                <th>Variable Value</th>
                <th>Converted Type</th>
                <th>Converted Value</th>
            </tr>

            <!-- double -->

            <tr>
                <td rowspan="4">double</td>
                <td rowspan="4">' . gettype($double) . '</td>
                <td rowspan="4">' . $double . '</td>
                <td>' . gettype($i1) . '</td>
                <td>' . $i1 . '</td>
            </tr>
            <tr>
                <td>' . gettype($f1) . '</td>
                <td>' . $f1 . '</td>
            </tr>
            <tr>
                <td>' . gettype($s1) . '</td>
                <td>' . $s1 . '</td>
            </tr>
            <tr>
                <td>' . gettype($a1) . '</td>
                <td>' . print_r($a1, true) . '</td>
            </tr>

            <!-- int -->
            
            <tr>
                <td rowspan="4">int</td>
                <td rowspan="4">' . gettype($int) . '</td>
                <td rowspan="4">' . $int . '</td>
                <td>' . gettype($d1) . '</td>
                <td>' . $d1 . '</td>
            </tr>
            <tr>
                <td>' . gettype($f2) . '</td>
                <td>' . $f2 . '</td>
            </tr>
            <tr>
                <td>' . gettype($s2) . '</td>
                <td>' . $s2 . '</td>
            </tr>
            <tr>
                <td>' . gettype($a2) . '</td>
                <td>' . print_r($a2, true) . '</td>
            </tr>

            <!-- float -->
            
            <tr>
                <td rowspan="4">float</td>
                <td rowspan="4">' . gettype($float) . '</td>
                <td rowspan="4">' . $float . '</td>
                <td>' . gettype($i2) . '</td>
                <td>' . $i2 . '</td>
            </tr>
            <tr>
                <td>' . gettype($d2) . '</td>
                <td>' . $d2 . '</td>
            </tr>
            <tr>
                <td>' . gettype($s3) . '</td>
                <td>' . $s3 . '</td>
            </tr>
            <tr>
                <td>' . gettype($a3) . '</td>
                <td>' . print_r($a3, true) . '</td>
            </tr>

            <!-- string -->
            
            <tr>
                <td rowspan="4">string</td>
                <td rowspan="4">' . gettype($string) . '</td>
                <td rowspan="4">' . $string . '</td>
                <td>' . gettype($i3) . '</td>
                <td>' . $i3 . '</td>
            </tr>
            <tr>
                <td>' . gettype($d3) . '</td>
                <td>' . $d3 . '</td>
            </tr>
            <tr>
                <td>' . gettype($f3) . '</td>
                <td>' . $f3 . '</td>
            </tr>
            <tr>
                <td>' . gettype($a4) . '</td>
                <td>' . print_r($a4, true) . '</td>
            </tr>

            <!-- array -->
            
            <tr>
                <td rowspan="3">array</td>
                <td rowspan="3">' . gettype($array) . '</td>
                <td rowspan="3">' . print_r($array, true) . '</td>
                <td>' . gettype($i4) . '</td>
                <td>' . $i4 . '</td>
            </tr>
            <tr>
                <td>' . gettype($d4) . '</td>
                <td>' . $d4 . '</td>
            </tr>
            <tr>
                <td>' . gettype($f4) . '</td>
                <td>' . $f4 . '</td>
            </tr>

        </table>
        </center>
        </body>
        </html>
    ';
?>
