<?php 
    $host = 'localhost';
    $db = "movie";
    $user = 'root';
    $pass = '';


    try{
        $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

        $sql = "INSERT INTO users(id, emri, username, email, password, confirm_password, is_admin) VALUES
        (1, 'Lum', 'Lum2', 'lum@gmail.com', 'lum123', 'lum123', 'false'),
        (2, 'Reis', 'ReisS', 'reis@gmail.com', 'reis123', 'reis123', 'false'),
        (3, 'Sufjan', 'SufjaZ', 'sufjan@gmail.com', 'sufjan123', 'sufjan123','false'),
        (4, 'Buna', 'Buna2', 'buna@gmail.com', 'buna123', 'buna123', 'false'),
        (5, 'Arianita', 'Arianita2', 'arianita@gmail.com', 'arianita123', 'arianita123', 'true');

        INSERT INTO movies(id, movie_name, movie_desc, movie_quality, movie_rating, movie_image) VALUES
        (1, 'Spiderman', 'description', '3D', '10', 'https://variety.com/2015/film/news/spider-man-marvel-sony-movies-1201429508/'),
        (2, 'Fast and Furious', 'description', '2D', '10', 'https://tse3.mm.bing.net/th/id/OIP.b_ceCbZZ-5ENFzsPUf-EAwHaEo?rs=1&pid=ImgDetMain&o=7&rm=3');

        INSERT INTO bookings(id, user_id, movie_id, nr_tickets, data, time) VALUES
        (1, 4, 1, 3, '28/03/2026', '19:00'),
        (2, 3, 2, 2, '27/03/2026', '17:00'); 

        ";


        $conn->exec($sql);

        echo "values were inserted";
        
    }catch(Exeption $e){


        echo "values were not inserted";


    }


?>