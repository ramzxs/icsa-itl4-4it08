<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>FUNCTIONS</h1>

    <?php
    // FUNCTION DEFINITION
    // PARAMETERS
    // Variable Scope
    function functionName($n) {
        // global $a;
        // $a = 2; // Local
        echo "I am inside<br>";
        echo $n;
    }

    $a = 123; // Global

    // FUNCTION CALL
    functionName($a);


    echo '<hr>';
    // Create a function that accepts two numbers, minimum and maximum
    // and prints out the range (difference of the two numbers)
    // Range = MAX - MIN
    // Call:   findRange(5, 256)
    // Output: "Range: 251"
    function findRange($min, $max) {
        echo "Range: 251";
    }

    findRange(5, 128);
    ?>
</body>
</html>