<!-- PHP Numbers
There are three main numeric types in PHP:

Integer
Float
Number Strings
In addition, PHP has two more data types used for numbers:

Infinity
NaN -->
<?php
$a = 5;
$b = 5.34;
$c = "25";
// echo PHP_INT_MAX + "\n";
// echo PHP_INT_MIN + "\n";
// echo PHP_INT_SIZE + "\n";
echo is_int(5);
echo is_long(122222222222223232323);
echo PHP_FLOAT_MAX;
echo PHP_FLOAT_MIN;
echo PHP_FLOAT_DIG;
echo is_float(5.67);
echo is_double(32323232.23232);
echo is_finite(1.9e411);
echo is_infinite(323232323232e23232);
echo is_nan(acos(8));
echo is_numeric("6565665");
echo is_numeric("3232.32323" + 2323);
echo is_numeric("Hello");
// cast strings and floats to integers
$yy = 2433.32323;
$int_case = (int)$yy;
echo $int_case;
$zz = "23232.3232";
$int_case = (int)$zz;
echo $int_case;
?>