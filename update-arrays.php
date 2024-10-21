<?php
$cars = ["Volvo", "BMW", "Toyota"];
foreach($cars as &$x) {
    $x = "Ford";
}
/*
Note: Remember to add the unset() function after the loop.

Without the unset($x) function, the $x variable will remain as a reference to the last array item.
*/
unset($x);
var_dump($cars);
?>