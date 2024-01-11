<?php
    // This is my controller!

    // Turn on error reporting
    ini_set('dispaly_errors', 1);
    error_reporting(E_ALL);

    // Require the autoload file
    // No mater how many packages I use, with the following line I can use that package anywhere
    require_one('vender/autoload.php');

    // Instantiate the F3 (Fat-Free Framework) Base class
    $f3 = Base::instace(); // Static method would use "::"
    // In java you would write it like this, Base f3 = new Base();

    // Define a default route
    $f3 -> route('GET /', function() {
        echo "<h1>Hello!</h1>";
    });

    // Run fat-free
    $f3 -> run();
?>