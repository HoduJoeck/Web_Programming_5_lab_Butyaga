<?php
$file =  fopen("file.txt", 'r') or die("не удалось открыть файл");

echo("<h2>Содержимое файла:</h2>");
while(!feof($file))
{
    $str = htmlentities(fgets($file));
    echo $str;  
}

fclose($file);
?>