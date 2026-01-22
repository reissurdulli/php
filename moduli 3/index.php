<?php

// $_days = "tuesday";

// switch ($_days) {
//     case 'monday':
//         echo "its monday";
//         break;

//         case 'tuesday':
//         echo "its tuesday";
//         break;
        
//         case 'wednesday':
//         echo "its wednesday";
//         break;
    
//         case 'thursday':
//         echo "its thursday";
//         break;
        
//         case 'friday':
//         echo "its friday";
//         break;
        
//         case 'saturday':
//         echo "its saturday";
//         break;
    
//         case 'sunday':
//         echo "its sunday";
//         break;
//     default:
//         case "error";
//         break;
// }

// $_number = 0;

// while ($_number <= 5) {
//     echo "the number is $_number <hr>";

//     $_number++;
// }

// $_number1 = 0;

// do {
//     echo "the number is $_number1 <hr>";

//     $_number1++;
// } while ($_number1 <= 5);

// for ($x=0; $x<=5 ; $x++) {
//     echo "the number x is $x <hr>";    
// }

$cars = array("Audi","BMW","Telsa","Ford") ;

foreach ($cars as $value) {
    echo "$value <hr>";
}

$age = array("lumi" => 13,"jora"=> 13 ,"sufjan" => 15);
foreach ($age as $value => $mosha) {
    echo "$value = $mosha <hr>";
}
?>