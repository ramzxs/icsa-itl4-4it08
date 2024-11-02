<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1.1.2</title>
</head>
<body>
    <h1>TASK 1.1.2: Access/Write a file on the server</h1>

    <?php
    // ACCESS or READ FILE
    $file = fopen('data1.txt', 'r');
    $data = fread($file, '10');
    echo $data;
    ?>
</body>
</html>