<?php 

$filemanipulation = fopen("reis.txt","w");

$sufj = fopen("sufjan.txt","r");

fclose($sufj);

$filename = "modex.txt";

$readonly = fopen($filename,"r");

$size = filesize($filename);

$filedata = fread($readonly, $size);

echo $filedata;

$read = fopen("modex.txt","r");

while(!!feof($read)){
    echo fgets($read). "<br>";
}

fclose($read);

$write = fopen("reis.txt","w");

$text = "Ne sot po mesojme file manipulation";
fwrite( $write, $text);

$hii = file_put_contents('test.txt', "This is the seocnd text we are adding");

echo $hii;
?>