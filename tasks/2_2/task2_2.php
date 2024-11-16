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

    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>

<body>
    <h1>
        <div style="display: inline-block; width: 32px; height:32px">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
            </svg>
        </div>

        DATE CALCULATOR APP
    </h1>

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

        <hr>

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
function calculate($date, $numDays)
{
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