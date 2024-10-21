// Add one more item to the fruits array:
<?php
$fruits = ["Apple", "Banana", "Cherry"];
$fruits[] = "Orange";
echo $fruits . "\n";
//To add multiple items to an existing array, use the array_push() function.

array_push($fruits, "Lemon", "Kiwi");

//To add multiple items to an existing array, you can use the += operator.

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color"=>"red", "year"=>1964];
var_dump($cars);
?>