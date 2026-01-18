<?php

$text = $_POST["textarea"];

if ($text == "") {
    echo("<h2>Поле textarea не заполнено. Файл в запись не произошла</h2>");
    echo("<input type='submit' value='Вернутсья к форме' id='button'>");
}
else {
    $file = fopen("file.txt", 'w') or die("не удалось создать файл");
    fwrite($file, $text);
    fclose($file);
}

require 'sourceReader.php';
?>

<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="utf-8">
    <title>Бутяга Тимофей Сергеевич 3302</title>
</head>

<body>
    <p>
        <input type='submit' value='Вернутсья к форме' id='button'>
    </p>
    <script>
        button = document.getElementById("button");
        if (button !== null) {
            button.addEventListener("click", clicked);
        }

        function clicked() {
            window.location.href = 'index.html';
        }
    </script>
</body>

</html>