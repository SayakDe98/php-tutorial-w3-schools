/*
Create a Function
A user-defined function declaration starts with the keyword function, followed by the name of the function:
function myMessage() {
  echo "Hello world!";
}

*/

<?php
    // function arguments
    function familyName($fName) {
        echo "$fName" . "\n";
    }
    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    function familyName1($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
      }
      
      familyName1("Hege", "1975");
      familyName1("Stale", "1978");
      familyName1("Kai Jim", "1983");

      // default argument
      function setHeight($minheight = 50) {
        echo "The height is : $minheight \n";
      }
      
      setHeight(350);
      setHeight(); // will use the default value of 50
      setHeight(135);
      setHeight(80);  
      
      //returning values
      function sum($x, $y) {
        $z = $x + $y;
        return $z . "\n";
      }
      
      echo "5 + 10 = " . sum(5, 10) . "\n";
      echo "7 + 13 = " . sum(7, 13) . "\n";
      echo "2 + 4 = " . sum(2, 4);

      // Passing Arguments by Reference
//       In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

// When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:
      function add_five(&$value) {
        $value += 5;
      }
      $num = 2;
      add_five($num);
      echo $num . "\n";

      // variable number of arguments
      function sumMyNumbers(...$x) {
        $n = 0;
        $len = count($x);
        for($i = 0; $i < $len; $i++) {
            $n += $x[$i];
        }
        return $n;
      }
      $a = sumMyNumbers(5,2,6,2,7,7);
      echo $a . "\n";

      /*
      PHP is a Loosely Typed Language
In the examples above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.

In the following example we try to send both a number and a string to the function without using strict:
      */
      function addNumbers (int $a, int $b) {
        return $a + $b;
      }
    //   echo addNumbers(5, "5 days");
    echo addNumbers(44, 56);
//     To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.

// In the following example we try to send both a number and a string to the function, but here we have added the strict declaration:


?>

