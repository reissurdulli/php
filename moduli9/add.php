<?php

include_once ('config.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $sqlQuesry = $conn -> prepare($sql);

    $sqlQuesry->bindParam(':username', $username);
    $sqlQuesry->bindParam(':password', $password);

    $sqlQuesry->execute();
    echo "data saved succsessfully";    

}


?>