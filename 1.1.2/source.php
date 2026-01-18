<?php 
    $value = $_POST["field"];
    echo "". $value ."";
    if ($value != "") {
        echo '<script>console.log("Длина строки [" + ' . json_encode($value) . ' + "] равна " + ' . json_encode(strlen($value)) . ' );</script>';
    }
    else {
        echo '<script>console.log("Была передана пустая строка")</script>';
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
            button.addEventListener("click",clicked);

            function clicked() {
                window.location.href = 'index.html';
            }

        </script>
    </body>
</html>
