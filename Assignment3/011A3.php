<?php

    function dectobin($n)
    {
        return decbin($n);
    }

    function dectooct($n)
    {
        return decoct($n);
    }

    function dectohexa($n)
    {
        return dechex($n);
    }

    function bintodec($n)
    {
        return bindec($n);
    }

    function bintooct($n)
    {
        return decoct(bindec($n));
    }

    function bintohexa($n)
    {
        return dechex(bindec($n));
    }

    function octtodec($n)
    {
        return octdec($n);
    }

    function octtobin($n)
    {
        return decbin(octdec($n));
    }

    function octtohexa($n)
    {
        return dechex(octdec($n));
    }

    function hexatodec($n)
    {
        return hexdec($n);
    }

    function hexatobin($n)
    {
        return decbin(hexdec($n));
    }

    function hexatooct($n)
    {
        return decoct(hexdec($n));
    }

    echo dectobin(10) . "<br>";
    echo dectooct(10) . "<br>";
    echo dectohexa(10) . "<br>";
    echo bintodec("1010") . "<br>";
    echo bintooct("1010") . "<br>";
    echo bintohexa("1010") . "<br>";
    echo octtodec("12") . "<br>";
    echo octtobin("12") . "<br>";
    echo octtohexa("12") . "<br>";
    echo hexatodec("A") . "<br>";
    echo hexatobin("A") . "<br>";
    echo hexatooct("A");

?>
