<?php 
$host = 'localhost';
$db ='resturan sufjani';
$user = 'root';
$password = '';



try{

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $password);

    $username = "Reis";

    $password = password_hash("mypassword", PASSWORD_DEFAULT);

    $sql = "INSERT INTO user(username, password) VALUES ('$username', '$password')";

    $conn->exec($sql)
    echo "User CREATED"
}catch(Exeption $e){
    echo "User NOT CREATED";
}






?>