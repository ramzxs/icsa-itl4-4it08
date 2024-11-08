<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <h1>FUNCTIONS</h1>

    <?php
    // FUNCTION DEFINITION
    // function Keyword
    // Function Name (does not start with a number)
    // Parameter(s)
    // Block & Variable Scope
    // Return Value
    function functionName($n)
    {
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
    // EXAMPLE:
    // Call:   findRange(5, 256)
    // Output: "Range: 251"
    function findRange($min, $max)
    {
        echo "Range: " . ($max - $min);
    }

    findRange(5, 25);


    echo '<hr>';
    // RETURN VALUE
    function getMin($a, $b)
    {
        /* if ($a < $b) {
            return $a;
        } else {
            return $b;
        } */
       // Unary Operator ?:
       return ($a < $b) ? $a  : $b;
    }

    $min = getMin(155, 111);
    echo "Minimum: $min";
    ?>
</body>

</html>