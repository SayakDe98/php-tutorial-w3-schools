/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/
/*
Sort Array in Ascending Order - sort()
The following example sorts the elements of the $cars array in ascending alphabetical order:
*/
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo sort($cars) . "\n";
echo($cars) . "\n";
/*
The following example sorts the elements of the $numbers array in ascending numerical order:
*/
$numbers = array(4, 6, 2, 22, 11);
echo sort($numbers) . "\n";
/*
Sort Array in Descending Order - rsort()
The following example sorts the elements of the $cars array in descending alphabetical order:
*/
echo rsort($cars) . "\n";
/*
The following example sorts the elements of the $numbers array in descending numerical order:

*/
echo rsort($numbers) . "\n";
/*
Sort Array (Ascending Order), According to Value - asort()
The following example sorts an associative array in ascending order, according to the value:
*/
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo asort($age) . "\n";
/*
Sort Array (Ascending Order), According to Key - ksort()
The following example sorts an associative array in ascending order, according to the key:
*/
echo ksort($age) . "\n";
/*
Sort Array (Descending Order), According to Value - arsort()
The following example sorts an associative array in descending order, according to the value:
*/
echo arsort($age) . "\n";
/*
Sort Array (Descending Order), According to Key - krsort()
The following example sorts an associative array in descending order, according to the key:
*/
echo krsort($age) . "\n";
var_dump($age);
?>