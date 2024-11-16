<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Calculator App</title>
</head>
<body>
    <h1>DATE CALCULATOR APP</h1>
    
    <?php
    date_default_timezone_set('Asia/Kuwait');
    ?>

    <form action="?" method="GET">
        Current Date:
        <b><?= date('dS F Y l h:i:sa');  ?></b>
        <br>

        <?php /*
        date('FORMAT')            // Use current timestamp
        date('FORMAT', timestamp) // Use manual: strtotime('2024-11-08 22:22')
        
        DATE FORMAT:
        MONTH                DATE            DAY
        F: November          d: 06           l: Saturday 
        M: Nov               j: 6            D: Sat
        m: 11 */ ?>

        Add Number of Days:
        <input type="number"
                value="<?= isset($_GET['daysToAdd']) ? $_GET['daysToAdd'] : 1 ?>"
                name="daysToAdd">
        <br>

        <input type="submit" value="Calculate">
        <br>

        Result:
        <?php
        $date = date('Y-m-d H:i:s');
        $numberOfDays = isset($_GET['daysToAdd']) ? $_GET['daysToAdd'] : 1;
        
        /* echo $date;
        echo '---';
        echo $numberOfDays;
        echo '---'; */
        echo calculate($date, $numberOfDays);
        ?>
        <br>
    </form>
</body>
</html>

<?php
function calculate($date, $numDays) {
    return $date .' +/- '. $numDays;
}