<?php


include_once('config.php');


$sql = "SELECT * FROM  products";


$getUsers = $conn->prepare($sql);


$getUsers -> execute();


$users = $getUsers->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        background-color: lightgray;
        text-align: center;

        }
        table, td, th{
            border: 1px solid black;
            background-color: white;
            text-align: center;
        }


        td, th{
        border-radius: 25px;
        border: 2px solid #446614;
        padding: 20px;
        }


        th{
        border-radius: 25px;
        border: 2px solid #000000;
        background-color: #324715;
        padding: 20px;
        }


        form>input{
            margin: 10px;
            font-size: 20px;
            padding: 5px;
        }
        button{
            border: 1px solid black;
            padding: 10px 30px;
            font-size: 20px
        }
        table{
            margin: 0 auto;
            margin-top: 150px;
            border-radius: 25px;
            background: #73AD21;
            padding: 20px;

        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
    </tr>

    <?php
        foreach($users as $user){ ?>
            <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['name']; ?></td>
            <td><?= $user['price']; ?></td>
            <td><?= $user['description']; ?></td>
            <td> <?= "<a href='delete.php?id=$user[id]'>Delete</a>"?></td>
            <td> <?= "<a href='update.php?id=$user[id]'>Update</a>"?></td>
            </tr>
        <?php } ?>
</table>    
        <form action="add.php" method="POST">
            <input type="text" name="name" placeholder="Name"></br>
            <input type="text" name="price" placeholder="Price"></br>
            <input type="text" name="description" placeholder="Description"></br>
            <button type="submit" name="submit">Add</button>
        </form>
</body>
</html>