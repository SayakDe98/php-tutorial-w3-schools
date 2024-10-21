<?php
    $x = "Hello world!";
    echo substr($x, 6, 5); # Start the slice at index 6 and end the slice 5 positions later:
    echo "\n";
    // Start the slice at index 6 and go all the way to the end:
    echo substr($x, 6);
    echo "\n";
    // Get the 3 characters, starting from the "o" in world (index -5):
    echo substr($x, -5, 3);
?>
