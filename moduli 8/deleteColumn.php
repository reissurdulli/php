<?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=testjora","root","");
        $sql = "ALTER TABLE products DROP COLUMN name";

        $pdo->exec($sql);
        echo "column dropped succsessfully";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>