<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$price = $_POST['price'];
		$description = $_POST['description'];

        $sql = "insert into products (name, price, description) values (:name, :price, :description)";
        $sqlQuery = $conn->prepare($sql);
    
        $sqlQuery->bindParam(':name', $name); 
        $sqlQuery->bindParam(':price', $price);
        $sqlQuery->bindParam(':description', $description);

        $sqlQuery->execute();


	}
?>