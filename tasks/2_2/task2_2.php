<?php
// Setup
date_default_timezone_set('Asia/Kuwait');
$longFormat = 'dS F Y l h:i:sa';
$shortFormat = 'Y-m-d H:i:s';
$daysToAdd = isset($_GET['daysToAdd']) ? $_GET['daysToAdd'] : 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Calculator App</title>
</head>
<body>
    <h1>DATE CALCULATOR APP</h1>

    <form action="?" method="GET">
        Current Date:
        <b><?= date($longFormat);  ?></b>
        <br>

        Add Number of Days:
        <input type="number"
                value="<?= $daysToAdd ?>"
                name="daysToAdd">
        <br>

        <input type="submit" value="Calculate">
        <br>

        Result:
        <b><?php
        $date = date($shortFormat);
        
        echo calculate($date, $daysToAdd);
        ?></b>
        <br>
    </form>
</body>
</html>

<?php
function calculate($date, $numDays) {
    global $longFormat;

    // '2024-11-16 23:14 + 14 DAY' -> 1732461328 (Unix time)
    $str = $date . ' ' . $numDays . ' DAY';
    $timestamp = strtotime(datetime: $str);
  
    $result = date($longFormat, timestamp: $timestamp);
    return $result;
}


/*
Manual: https://www.php.net/manual/en/function.date.php
date('FORMAT')            // Use current timestamp
date('FORMAT', timestamp) // Use manual: strtotime('2024-11-08 22:22')

DATE FORMAT:
MONTH                DATE            DAY
F: November          d: 06           l: Saturday 
M: Nov               j: 6            D: Sat
m: 11 */