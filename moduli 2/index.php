<?php
$_emri = "reis";
$_mbiemri = "surdulli";

$_username = $_emri.$_mbiemri;
echo $_username."<hr>";

$_string = "string";
echo strlen($_string). "<hr>";
 
$_string2 = "s t r i n g i";
echo str_word_count($_string2). "<hr>";

$_string3 = "programming is not cool";
echo str_replace("not", "very", $_string3). "<hr>";

$_string4 = "string5";
echo strrev($_string4). "<hr>";
?>

<?php 
$_nr = 4;
if ($_nr == 0) {
    echo "the number is 0";
}elseif ($_nr > 0) {
    echo "the number is greater than 0";
}else{
    echo "the number is smaller than 0";
}

?>