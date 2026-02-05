<?php

$dogs=array(
    array("Bulldog","England",6),
    array("German Shepherd","Germany",7),
    array("Pug","China",2)
);

echo $dogs[0][0]. "Origin:".$dogs[0][1]."Age:".$dogs[0][2]."<hr>";
echo $dogs[1][1]. "Origin:".$dogs[1][1]."Age:".$dogs[1][2]."<hr>";
echo $dogs[2][1]. "Origin:".$dogs[2][1]."Age:".$dogs[2][2]."<hr>";

for ($x=0; $x <3 ; $x++) { 
    echo "<ul>";
    for ($y=0; $y <3 ; $y++) { 
        echo "<li>".$dogs[$x][$y]. "</li>";
    }
    echo "</ul>";
}

?>  

<!DOCTYPE html>
<html>
    <table>
        <tr>
            <th>Phone</th>
            <th>In stock</th>
            <th>Sold</th>
        </tr>

    <style>
        table{
            width: 500px;
        }

        th, td{
            padding:10px;
            text-align: center;
            border: 1px solid black;
        }

        th{
            background-color: aquamarine;
            font-weight: bold;
        }
    </style>

    <?php
    $phones = array(
        array("Iphone17", 20, 5),
        array("Iphone16",6,7),
        array("Iphone15",15,15),
        array("Iphone13",0,0),
    );

    for ($row=0; $row <4 ; $row++) { 
        echo "<tr>";
        for ($col=0; $col < 3; $col++) { 
            echo "<td>".$phones[$row][$col]."</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</html>

<?php

$reis = [
    "Math"=>"3",
    "Elektronik"=> "5",
    "Ed qytetare"=> "2"
];

echo "Math grade is".$reis['Math'];

foreach($reis as $Subject => $reis) {
    echo "Subject: ". $Subject. " Grade: ". $reis. "<hr>";
}
?>
