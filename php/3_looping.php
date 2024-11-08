<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <h1>LOOPING</h1>

    <?php
    // do-while Loop
    echo "<h2>do-while Loop</h2>";
    $counter = 1;
    do { // Guaranteed 1 Pass
        echo "$counter<br>";
        $counter++;
    } while ($counter <= 10);
    echo "<hr>";


    // while Loop
    echo "<h2>while Loop</h2>";
    $counter = 10;
    while ($counter < 10) {
        echo $counter++ . '<br>';
    }
    echo "<hr>";


    // for Loop
    echo "<h2>for Loop</h2>";
    //   initialization;  checking;  updating
    for ($i = 1;          $i <= 5;   $i++) {
        echo $i.' ';
    }
    echo '<hr>';


    // EXERCISE 1: RIGHT TRIANGLE
    // N: 5
    // *
    // **
    // ***
    // ****
    // *****


    // EXERCISE 2: INVERTED RIGHT TRIANGLE
    // N: 6
    // ******
    // *****
    // ****
    // ***
    // **
    // *


    // EXERCISE 3: PYRAMID
    // N = 9
    //                *               _
    //     *          1               4
    //    ***         3  (1 + 2)      3
    //   *****        5  (3 + 2)      2
    //  *******       7               1
    // *********      9               0








    
    $N = 7;
    for ($i = 1; $i <= $N; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }


    echo '<hr>';


    for ($i = $N; $i > 0; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }


    echo '<hr>';
    echo '<pre>';
    
    $N = 99;
    for ($i = 1; $i <= $N; $i += 2) {
        // Spaces
        $spaces = ($N - $i) / 2;
        for ($j = 1; $j <= $spaces; $j++) {
            echo " ";
        }
        // Stars
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo '</pre>';
    ?>
</body>
</html>