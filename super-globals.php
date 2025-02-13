/*
Superglobals were introduced in PHP 4.1.0, and are built-in variables that are always available in all scopes.

PHP Global Variables - Superglobals
Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/
<?php
// $GLOBALS is an array that contains all global variables.
/*
Global Variables
Global variables are variables that can be accessed from any scope.

Variables of the outer most scope are automatically global variables, and can be used by any scope, e.g. inside a function.

To use a global variable inside a function you have to either define them as global with the global keyword, or refer to them by using the $GLOBALS syntax.


*/
$x = 75;
function myFunction() {
    echo $GLOBALS['x'];
    
}
myFunction();
function myFunc() {
    // You can also refer to global variables inside functions by defining them as global with the global keyword.
    global $y;
    echo $y . "\n";
}
/*
$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
*/
// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['HTTP_REFERER'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['SCRIPT_NAME'];
?>