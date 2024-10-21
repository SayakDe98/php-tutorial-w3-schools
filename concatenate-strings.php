<?php
    $x = "Hello";
    $y = "World";
    $a = $x . $y; # without spaces
    $b = $x . " " . $y; // with spaces
    $c = "$x $y"; // with spaces + surrounding double quotes
    echo $a;
    echo "\n";
    echo $b;
    echo "\n";
    echo $c;
?>