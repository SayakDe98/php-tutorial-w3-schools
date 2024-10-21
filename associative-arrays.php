# Associative arrays are arrays that use named keys that you assign to them.
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
// Access associative arrays:
echo $car["model"] . "\n";
// To change the value of an array item, use the key name:
$car["year"] = 2024;
var_dump($car);
/*
Loop Through an Associative Array
To loop through and print all the values of an associative array, you could use a foreach loop, like this:
*/
foreach($car as $x=>$y) {
    echo "$x: $y" . "\n";
}
?>