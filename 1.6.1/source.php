<?php
$value = $_POST["field"];
if ($value != "") {
    $date = date("d-m-Y",strtotime($value));
    echo $date . " - ";
    $today = date("d-m-Y");
    $difference_days = (strtotime($today)-strtotime($date))/ (60 * 60 * 24);
    if ($difference_days >= 0) {
        echo("Эта дата уже прошла.");
    }
    else {
        echo("Эта дата ещё не настала.");
    }
}
else {
    echo "Строка в форме - пустая.";
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