<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1.1.3</title>
</head>
<body>
    <h1>TASK 1.1.3: Interact with other servers</h1>

    <?php
    // Checkout cURL also
    $contents = file_get_contents("https://en.wikipedia.org/wiki/API");
    echo $contents; // Search Engine Bots / Web Crawlers: Track and rank all the links
    ?>
</body>
</html>