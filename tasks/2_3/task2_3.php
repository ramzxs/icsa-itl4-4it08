<?php
$DBCONN = new mysqli('127.0.8.1', 'root', '', 'q8univ_elearning_db', '3306');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q8 University Student Records</title>
    <style>
        body {
            font-family: monospace;
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <h2>Q8 UNIVERSITY</h2>
    <h1>STUDENT RECORDS</h1>

    <?php
    $sql = "SELECT * FROM `student` ORDER BY `stdID` ASC";

    $result = $DBCONN->query($sql);
    for ($i = 1; $row = $result->fetch_assoc(); $i++) {
        echo $i . '. '; 
        ?>

        <a href="javascript:loadStudentInfo(<?= $i ?>, '<?= $row['stdID'] ?>')"><?= $row['stdID'] ?></a>

        <span id="name<?= $i ?>">_</span>
        <br>

        <?php
    }
    ?>

    <script>
        async function loadStudentInfo(i, stdID) {
            // alert("Loading " + stdID + ' at row ' + i);
            var url = 'studentinfoloader.php?id=' + stdID;
            const request = await fetch(url);
            const result = await request.text();
            document.getElementById('name'+i).innerHTML = result; 
        }
    </script>
</body>
</html>