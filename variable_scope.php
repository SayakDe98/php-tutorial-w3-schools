<?php 
$x = 5;
function myTest() {
    // echo "This is value of x: $x inside a function"; 
    // doesn't work inside a function
}
myTest();

echo "Value of x: $x outside a function\n";

function myTest2() {
    $x = 5;
    echo $x;
}

myTest2();
echo "\n";
// Global keyword
$a = 5;
$b = 10;

function myGlobalTest() {
    global $a, $b; // access global variable from within a function.
    $b = $a + $b;
}
myGlobalTest();
echo $b;
echo "\n";
// Below does the same as myGlobalTest
function myGlobalArrayTest() {
    $GLOBALS['b'] = $GLOBALS['b'] + $GLOBALS['a'];
}

myGlobalArrayTest();
echo $b;
echo "\n";
function myStaticTest() {
    // Normally, when a function is completed/executed, 
    // all of its variables are deleted. However, 
    // sometimes we want a local variable NOT to be deleted. 
    // We need it for a further job.
    static $count = 0;
    echo "Count: $count \n";
    $count++;
}

myStaticTest();
myStaticTest();
myStaticTest();
$name = 'Linus';
function myScopeTest() {
  $name = 'Tobias';
}
myTest();
echo $name;
?>