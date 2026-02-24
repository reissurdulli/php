<?php 
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=testjora","root","");

        $sql = "ALTER TABLE products ADD email VARCHAR(255)";

        $pdo->exec($sql);
        echo "column created successfully";
    } catch (PDOException $e) {
        echo "errorr creating column: ". $e->getMessage();        
    }
?>