<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1.1.1</title>
</head>
<body>

    <h1>TASK 1.1.1: QUERYING THE DATABASE</h1>

    <?php
    // RDBMS = MariaDB / MySQL
    // 3 Ways to Connect to MySQL in PHP
    // 1. mysql Extension - Old
    // 2. mysqli Extension - Improved version: Direct, Native interface to MySQL
    //                       (https://www.php.net/manual/en/book.mysqli.php)
    // 3. PDO (PHP Database Objects) - Migrating from MySQL to PostreSQL, no code changes needed

    // Hostname: localhost or 127.0.0.1
    // Default XAMPP MySQL User: root = (blank)
    // Task 2.1
    try {
        $DBCONN = new mysqli('127.0.0.1', 'root', '', 'task_sample_db');
        
        // ` (backtick) = Shift + ~
        $sql = "SELECT * FROM `note` ORDER BY `dateTime` DESC";
        $result = $DBCONN->query($sql);
        while ($row = $result->fetch_assoc()) {
            // Debugging:
            print_r($row);
            // echo $row['body'];
            echo '<br>';
        }
    } catch (Exception $e) { // Error Handling
        echo 'Sorry. Something went wrong.';
    }
    ?>
</body>
</html>