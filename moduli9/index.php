<?php
    $username = $_GET['username'];
    $password = $_GET['password'];
    echo $username;
    echo "<br>";
    echo $password;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My php form</title>
</head>
<body>
    <form action="config.php" method="get">
    <label for="Username" placeholder="Username">Username:</label><br>
    <input type="text" id="username" name="username"><br><br>
    <label for="Password" placeholder="Password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="Submit" value="Submit">
    </form>
</body>
</html>