<?php
$value = $_POST["field"];
$pos = strpos($value, "0");
if ($pos !== false) {
    $pos = $pos / 2; // чтобы вывести коректную позицию
    echo "Ноль найден на позиции: " . $pos;
}
else {
    echo "Ноль не был найден в данной подстроке";
}
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