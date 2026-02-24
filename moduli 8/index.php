<?php 

$host = 'localhost';
$db = 'testjora';
$user = 'root';
$password = '';

try {

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    $sql = "CREATE TABLE users(
        id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL
    );

    INSERT INTO users(username, password) VALUES
    ('lumi','asddsadsa'),
    ('reis','surdulli'),
    ('Jora','213098');
    ";

    $conn->exec($sql);

    echo "Table created";

} catch (Exception $e) {
    echo "not connected";
}

?>