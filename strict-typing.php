<?php 
    declare(strict_types=1);
    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    // echo addNumbers(5, "5 days"); // we get coompile time error


    // declare return type
//     PHP Return Type Declarations
// PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

// To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.

// In the following example we specify the return type for the function:

    function addTwoNumbers(int $a, int $b): int {
        return $a + $b;
    } 
    echo addTwoNumbers(44, 56) . "\n";

    // type casting:
    function addNumbersToGetDifferentReturnType(float $a, float $b): int {
        return (int)($a + $b);
    }
    echo addNumbersToGetDifferentReturnType(1.2, 5.2);
?>