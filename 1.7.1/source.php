<?php
$file =  fopen("text.txt", 'r') or die("не удалось открыть файл");

echo("<h2>Содержимое файла:</h2>");
while(!feof($file))
{
    $str = htmlentities(fgets($file));
    echo $str;
}
$count = mb_strlen($str,'UTF-8');

echo("<h3>Кол-во символов: " . $count . "</h3>");

fclose($file)
?>

<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="utf-8">
    <title>Бутяга Тимофей Сергеевич 3302</title>
</head>

<!--<body>
    <h2><input type="submit" value="Вернуться к заполнению формы" id="my_button"></h2>
    <script>
        button = document.getElementById("my_button");
        button.addEventListener("click", clicked);

        function clicked() {
            window.location.href = 'index.html';
        }

    </script>
</body>-->

</html>