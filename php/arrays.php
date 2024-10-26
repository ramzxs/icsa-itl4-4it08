<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>ARRAYS</h1>
    <h2>Data Structures and Algorithms</h2>

    <?php
    // https://github.com/ramzxs/icsa-itl4-4it08
                  // 0      1       2          3
    $friends = array("Ana", "Beta", "Charlie", "Delta");
    $N = count($friends);
    echo $N.'<br>';
    echo $friends[0].'<br>';
    echo $friends[$N - 1].'<br>';

    // Get a random item from the Friends List
    $randomNumber = rand(0, $N - 1);
    echo $randomNumber.'<br>';
    echo $friends[ $randomNumber ].'<br>';


    echo '<hr>';
    // RANDOM STRING GENERATOR
    // Alphabet = A, B, C, D, E
    // Length of the Random String = 3
    // Random String = ACE
    $alphabet = [ 'A','B','C','D','E','0','1','2','3','4','5' ];
    $N = 5;
    for ($i = 1; $i <= $N; $i++) {
        $randomNumber = rand(0, max: count($alphabet) - 1);
        echo $alphabet[ $randomNumber ];
    }
    ?>
</body>
</html>