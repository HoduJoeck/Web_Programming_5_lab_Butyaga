<?php
$value1 = intval($_POST["field1"]);
$value2 = intval($_POST["field2"]);
echo "<h3>" . json_encode($value1) . " + " . json_encode($value2) . " = " . json_encode($value1+$value2) . "<h3>"
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Бутяга Тимофей Сергеевич 3302</title>
</head>

<body>
    <h2><input type="submit" value="Вернуться к заполнению формы" id="my_button"></h2>
    <script>
        button = document.getElementById("my_button");
        button.addEventListener("click", clicked);

        function clicked() {
            window.location.href = 'index.html';
        }

    </script>
</body>

</html>