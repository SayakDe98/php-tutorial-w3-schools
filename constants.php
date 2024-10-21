<?php
    define("GREETING", "Welcome to w3schools");
    echo GREETING;
    const MYCAR = "VOLVO";
    echo MYCAR;
    /*
    const cannot be created inside another block scope, like inside a function or inside an if statement.
    define can be created inside another block scope.
    */
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0];
    // Constants are GLOBAL
    define("WEEKEND", ['Saturday', 'Sunday']);
    function myTest() {
        return json_encode(WEEKEND);
    }
    echo myTest();
?>