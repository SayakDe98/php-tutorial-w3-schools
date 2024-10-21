# PHP has a set of built-in functions that you can use to modify strings.
<?php
$x = "Hello World";
echo strtoupper($x);
echo "\n";
echo strtolower($x);
echo ("\n");
echo str_replace("World", "Dolly", $x);
echo "\n";
echo strrev($x);
echo "\n";
$str = "    Hi there is extra space in this text    ";
echo trim($str);
echo "\n";
/*
Convert String into Array
The PHP explode() function splits a string into an array.

The first parameter of the explode() function 
represents the "separator". 
The "separator" specifies where to split the string.
*/
$y = explode(" ", $x);
/*
In PHP, print_r() is a function 
used to print human-readable information about a variable. 
It is particularly useful for debugging, 
as it displays structured information about arrays and objects
*/
print_r($y);
?>