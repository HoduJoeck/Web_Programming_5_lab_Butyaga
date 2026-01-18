<?php
$value = $_POST["field"];
$new_value = $value / 86400;

echo "<h3>Количество секунд:</h3>";
echo $value;
echo "<h3>Количество дней:</h3>";
echo $new_value;
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