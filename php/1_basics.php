<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <h1>PHP BASICS</h1>
    <?php
    /* PHP
   PROGRAMMING
   LANGUAGE */

    // Comments

    /* VARIABLES */
    $name = "Romeo"; // '' or ""
    $age = 18;
    $gender = 'M';   // M = Male | F = Femaile
    $agreed = false; // Boolean: true | false


    /* EXPRESSIONS && OPERATORS */
    // term = literal | variable
    // expression = term | term operator term | term operator expression

    // String Operators
    // . = Concatenation
    // "$variable" = Interpolation (use "" always)
    $space = " ";
    $word = "Apple";
    $word2 = "Banana";
    echo $word . $space . $word2;
    echo "<br>$word $word2<br>";

    // Numerical Operators
    // + - * / % (modulor or remainder)
    $a = 10;
    $b = 4;
    echo ($a + $b) . '<br>';
    echo ($a - $b) . '<br>';
    echo ($a * $b) . '<br>';
    echo ($a / $b) . '<br>';
    echo ($a % $b) . '<br>';
    // ++ -- (In/decrement)
    $c = 5;
    echo $c++ . '<br>'; // Print first, then add 1
    echo ++$c . '<br>'; // Add 1 first, then print

    // Boolean Operators
    // == != <> < <= > >=
    echo ('A' == 'a') . "<br>"; // false to String is "" (empty)
    echo ('A' != 'a') . "<br>"; // true  to String is "1"
    echo ('A' <> 'a') . "<br>";

    // && (AND)
    // true  && true  = true
    // true  && false = false
    // false && true  = false
    // false && false = false

    // || (OR)
    // true  || true  = true
    // true  || false = true
    // false || true  = true
    // false || false = false


    // EXERCISE 1: *C to *F
    $c = 123;
    $f = ($c * (9 / 5)) + 32; // 253.4 (0°C × 9/5) + 32 = 32°F
    echo "<br>Celsius: $c";
    echo "<br>Fahrenheit: $f";

    // EXERCISE 2: KWD to USD
    $k = 50.25;
    $u = $k * 3.26; // 163.87
    echo "<br>Kuwait Dinar (KWD): $k";
    echo "<br>US Dollar (USD): $u";
    ?>
</body>

</html>