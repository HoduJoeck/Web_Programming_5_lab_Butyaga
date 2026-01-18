<?php 
    $value = intval($_POST["number"]);
    if ($value < 0) {
        echo '<script>console.log(' . json_encode($value) . '+ " - отрицательное число" );</script>';
    }
    else {
        echo '<script>console.log(' . json_encode($value) . '+ " - не отрицательное число" );</script>';
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
