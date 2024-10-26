<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <h1>LOOPING</h1>

    <?php
    $x = 13;
    echo '<b>Variable X = ' . $x . '</b><br>';
    
    // $i
    // 1     1<br>
    // 2     2<br>
    // 3     3<br>
    for ($i = 1; $i <= 5; $i++) {
        echo $i.'';
    }
    echo '<hr>';

    // 1 *
    // 2 **
    // 3 ***
    // 4 ****
    // 5 *****

    // initialization; checking; updating
    // $i  $j
    // 1   1    *<br>
    //     2    *<br>
    //     3    *<br>
    //     4    *<br>
    //     5    *<br>
    //     6
    // 2   1    *<br>
    //     2    *<br>
    //     3    *<br>
    //     4    *<br>
    //     5    *<br>
    //     6
    // 3

    $N = 7;
    for ($i = 1; $i <= $N; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }


    echo '<hr>';
    // 5 *****
    // 4 ****
    // 3 ***
    // 2 **
    // 1 *

    for ($i = $N; $i > 0; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }


    echo '<hr>';
    echo '<pre>';
    // N = 9
    //                *               _
    //     *          1               4
    //    ***         3  (1 + 2)      3
    //   *****        5  (3 + 2)      2
    //  *******       7               1
    // *********      9               0
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