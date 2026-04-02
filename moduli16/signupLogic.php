<?php

    include_once("config.php");

    if(isset($_POST['submit'])) {
        $emri = $_POST['emri'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        $tempPassword = $_POST['password'];
        $password = password_hash($tempPassword, PASSWORD_DEFAULT);

        $tempConfirmPassword = $_POST['confirm_password'];
        $confirmPassword = password_hash($tempConfirmPassword, PASSWORD_DEFAULT);

        if(empty($emri) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
            echo "You have not filed all the feilds!";
        } else {
            $sql = "INSERT INTO users (emri, username, email, password, confirm_password) VALUES (:emri, :username, :email, :password, :confirm_password)";
            $insertSql = $conn->prepare($sql);
            $insertSql -> bindParam(':emri', $emri);
            $insertSql -> bindParam(':username', $username);
            $insertSql -> bindParam(':email', $email);
            $insertSql -> bindParam(':password', $password);
            $insertSql -> bindParam(':confirm_password', $confirmPassword);

            $insertSql -> execute();

            header("Location: login.php");
            
        }
    }

?>