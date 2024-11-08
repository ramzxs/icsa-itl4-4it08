<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Branching Statements</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <h1>PHP BRANCHING STATEMENTS</h1>

    <?php
    /* CONDITIONAL STATEMENTS */
    
    // if Statement
    $a = 5;
    if ($a < 0) { // { = Start of block
        echo "Negative<br>"; 
    } // } = End of block

    // if-else Statement
    if ($a > 0) {
        echo "Positive<br>"; 
    } else {
        echo "Negative<br>"; 
    }

    // if-else-if Statement
    $age = 0;
    if ($age < 11) {
        echo "Kid<br>";
    } else if ($age >= 11 && $age <= 19) {
        echo "Teen<br>";
    } else if ($age >= 20 && $age <= 59) {
        echo "Adult";
    } else if ($age >= 60) {
        echo "Senior Citizen<br>";
    } else {
        echo "Invalid Age<br>";
    }

    // switch Statement
    $gender = 'M';
    switch ($gender) {
        case 'M': echo "Male<br>"; break;
        case 'F': echo "Female<br>"; break;
        default:  echo "Invalid gender<br>";
    }


    // EXERCISE: GRADING SYSTEM
    // Grade  Mark  Level
    // 0-39   F     Fail
    // 40-59  P     Pass
    // 60-69  M     Merit
    // 70+    D     Distinction

    // Grade: 70
    echo "Grade: " . ($grade = 70) . '<br>';
    // Mark:  D
    $mark = '';
    if ($grade >= 0 && $grade <= 39) {
        $mark = 'F';
    } else if ($grade >= 40 && $grade <= 59) {
        $mark = 'P';
    } else if ($grade >= 60 && $grade <= 69) {
        $mark = 'M';
    } else if ($grade >= 70) {
        $mark = 'D';
    } else {
        $mark = 'INVALID';
    }
    echo "Mark: $mark<br>";
    // Level: Distinction
    $level = '';
    switch ($mark) {
        case 'F': $level = 'Fail'; break;
        case 'P': $level = 'Pass'; break;
        case 'M': $level = 'Merit'; break;
        case 'D': $level = 'Distinction'; break;
        default:  $level = 'Invalid Grade';
    }
    echo "Level: $level<br>";
    ?>
</body>
</html>