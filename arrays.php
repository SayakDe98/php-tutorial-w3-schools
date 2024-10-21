<?php
// An array stores multiple values in one single variable:

$cars = ["Volvo", "BMW", "Toyota"];

// An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.

/* 
PHP Array Types
In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays
*/

/*
Array Items
Array items can be of any data type.

The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.

You can have different data types in the same array.

*/

$myArr = array("Volvo", 15, ["apples", "bananas"]);



/*
Array Functions
The real strength of PHP arrays are the built-in array functions, like the count() function for counting array items:
*/

$arr1 = array("Volvo", "BMW", "Toyota");
echo count($arr1) . "\n";

?>