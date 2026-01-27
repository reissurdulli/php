<?php 

// phpinfo();

// $x= "hello";
// $y=1.12;
// $z=5;

// echo gettype($x);
// echo gettype($y);
// echo gettype($z);

// function printV(){
//     echo "this is PHP".phpversion();
// }

// printV();

// function maximumi($x, $y){
//     if ($x>$y) {
//         return $x;
//     }else{
//         return $y;  
        
// }}

// $test = maximumi(100, 101); 
// echo $test;

// function fullydevisable($_n){
//     if ($_n%2== 0) {
//         return "$_n is fully devisable with 2"."<hr>";
//     }else {
//         return "$_n is not fully devisavble with 2"."<hr>";
//     }
// };

// print_r(fullydevisable(12));
// print_r(fullydevisable(6));
// print_r(fullydevisable(7));

// $_x = 10;
// function bnfjdl(){
//     $_y= 12;
//     echo $_y."<hr>";
// }

// bnfjdl();
// echo $_x."<hr>";

$_sports = array("football","basketball","volleyball");
$_colors = ["red", "green", "blue"];
$_numbers = [6,7];

// echo $_sports[1];
// echo $_colors[2];

// for ($i=0; $i <3 ; $i++) { 
//     echo $_sports[$i],"<br>";
// }

// array_pop($_colors);
// var_dump($_colors);

// //array_unshift - adds array to the begining of the array
// array_unshift($_colors,'orange');
// var_dump($_colors);

// for ($i=0; $i <3 ; $i++) { 
//     echo $_colors [$i], "<hr>";
// }

// //array sum 
// var_dump(array_sum($_numbers));

$_num = [1,2,3,4,5];

array_sum($_num);

echo array_sum($_num)/5;


?>