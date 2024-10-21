/*
PHP - Multidimensional Arrays
A multidimensional array is an array containing one or more arrays.

PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.


*/
<?php
    $cars = array(
        array("Volvo", 22,18),
        array("BMW", 15,17),
        array("Saab", 20,14),
        array("Land Rover", 2,8),
    );
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".\n";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".\n";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".\n";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".\n";

for($row = 0; $row < 4; $row++) {
    echo "Row: " . $row;
    for($col = 0; $col < 3; $col++) {
        echo "Column Number:" . $cars[$row][$col] . "\t";
    }
    echo "\n";
}
?>