<?php
if (isset($_GET['id'])) {
    sleep(2);

    $DBCONN = new mysqli('127.0.8.1', 'root', '', 'q8univ_elearning_db', '3306');

    $sql = "SELECT * FROM `student` WHERE `stdID` = '" . $_GET['id'] . "'";

    $result = $DBCONN->query($sql);

    if ($row = $result->fetch_assoc()) {
        echo $row['stdNameEN'] . ' <b>' . $row['stdNameAR'].'</b>';
    } else {
        echo 'Not Found';
    }
} else {
    echo 'Supply an id parameter';
}