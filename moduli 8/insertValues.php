<?php 
    try{
            $pdo = new PDO("mysql:host=localhost;dbname=testjora", "root", "");

            $username = "Jask";

            $password = password_hash("mypassword", PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username,password) VALUES ('$username', '$password')";

            $pdo->exec($sql);

            echo "new record created successfully";
    } catch(PDOException $e){
        echo $e->getMessage();
    }
?>