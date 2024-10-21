/*
PHP Indexed Arrays
In indexed arrays each item has an index number.

By default, the first item has index 0, the second item has item 1, etc.
*/
<?php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
/*
Access Indexed Arrays
To access an array item you can refer to the index number.
*/
echo $cars[1];
/*
Change Value
To change the value of an array item, use the index number:
*/

$cars [1] = "Lambo";
echo $cars[1];
/*
Loop Through an Indexed Array
To loop through and print all the values of an indexed array, you could use a foreach loop, like this:


*/
foreach($cars as $x):
    echo $x . "\n";
endforeach;

/*
And if you use the array_push() function to add a new item, the new item will get the index 3:
*/
array_push($cars, "Mitsubishi");
var_dump($cars);

# But if you have an array with random index numbers, like this:
    $cars[5] = "Volvo";
    $cars[7] = "BMW";
    $cars[14] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);
?>