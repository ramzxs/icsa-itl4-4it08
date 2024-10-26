<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML 5 Form Input Elements</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        label {
            width: 100px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>HTML 5 Form Input Elements</h1>

    <label>Name:</label> <input type="text" size="50" placeholder="Surname, Given, Middle">
    <br>
    <label for="newpassword">Password:</label> <input type="password" id="newpassword">
    <br>
    <label>Search:</label> <input type="search" placeholder="Search for products">
    <br>
    <label>Favorite Number:</label> <input type="number" value="10">
    <br>
    <label for="dob">Date of Birth:</label> <input type="date" id="dob">
    <br>
    <input type="time">
    <br>
    <input type="datetime-local">
    <br>
    <input type="month">
    <br>
    <input type="color">
</body>
</html>