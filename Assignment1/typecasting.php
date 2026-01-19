<?php
    //double
    $double = 12.21;

    $i1 = (int) $double;
    $f1 = (float) $double;
    $s1 = (string) $double;
    $a1 = (array) $double;

    //int
    $int = 10;
    $d1 = (double) $int;
    $f2 = (float) $int;
    $s2 = (string) $int;
    $a2 = (array) $int;

    //float
    $float = 20.2;

    $i2 = (int) $float;
    $d2 = (double) $float;
    $s3 = (string) $float;
    $a3 = (array) $float;

    //string
    $string = "2.1";

    $i3 = (int) $string;
    $d3 = (double) $string;
    $f3 = (float) $string;
    $a4 = (array) $string;

    //array
    $array = ["20.1"];

    $i4 = (int) $array;
    $d4 = (double) $array;
    $f4 = (float) $array;
?>

<body>
    <center>
        <table border="1" style="text-align: center;">
            <tr>
                <th>Variable Name</th>
                <th>Variable Type</th>
                <th>Variable Value</th>
                <th>Converted Type</th>
                <th>Converted Type</th>
            </tr>
            <tr>
                <td rowspan="4">double</td>
                <td rowspan="4"><?php echo gettype($double) ?></td>
                <td rowspan="4"><?php echo $double ?></td>
                <td><?php echo gettype($i1) ?></td>
                <td><?php echo $i1 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($f1) ?></td>
                <td><?php echo $f1 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($s1) ?></td>
                <td><?php echo $s1 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($a1) ?></td>
                <td><?php print_r($a1)  ?></td>
            </tr>

            <!-- int -->

            <tr>
                <td rowspan="4">int</td>
                <td rowspan="4"><?php echo gettype($int) ?></td>
                <td rowspan="4"><?php echo $int ?></td>
                <td><?php echo gettype($d1) ?></td>
                <td><?php echo $d1 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($f2) ?></td>
                <td><?php echo $f2 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($s2) ?></td>
                <td><?php echo $s2 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($a2) ?></td>
                <td><?php print_r($a2)  ?></td>
            </tr>
            
            <!-- float -->
            
            <tr>
                <td rowspan="4">float</td>
                <td rowspan="4"><?php echo gettype($float) ?></td>
                <td rowspan="4"><?php echo $float ?></td>
                <td><?php echo gettype($i2) ?></td>
                <td><?php echo $i2 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($d2) ?></td>
                <td><?php echo $d2 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($s3) ?></td>
                <td><?php echo $s3 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($a3) ?></td>
                <td><?php print_r($a3)  ?></td>
            </tr>
            
            <!-- string -->
            
            <tr>
                <td rowspan="4">string</td>
                <td rowspan="4"><?php echo gettype($string) ?></td>
                <td rowspan="4"><?php echo $string ?></td>
                <td><?php echo gettype($i3) ?></td>
                <td><?php echo $i3 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($d3) ?></td>
                <td><?php echo $d3 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($f3) ?></td>
                <td><?php echo $f3 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($a4) ?></td>
                <td><?php print_r($a4)  ?></td>
            </tr>
            
            <!-- array -->
            
            <tr>
                <td rowspan="4">array</td>
                <td rowspan="4"><?php echo gettype($array) ?></td>
                <td rowspan="4"><?php print_r($array) ?></td>
                <td><?php echo gettype($i4) ?></td>
                <td><?php echo $i4 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($d4) ?></td>
                <td><?php echo $d4 ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($f4) ?></td>
                <td><?php echo $f4 ?></td>
            </tr>
        </table>
    </center>
</body>