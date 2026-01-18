<?php
$value1 = $_POST["field1"];
$value2 = intval($_POST["field2"]);

if ($value1 != "") {
	/*Преобразование строки в массив чисел*/
    $array = explode(" ", $value1); /* Массив чисел в виде строк*/
    $new_array = [];
	
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = intval($array[$i]); /* Преобразование строки $array[$i] в число*/
        if ($array[$i] != $value2) {
			/*Исключение чисел, которые надо удалить, в новом массиве*/
            array_push( $new_array, $array[$i]);
        }
    }
    echo '<p>Массив' . json_encode($array) . '</p>';
    echo '<p>Массив без чисел [' . json_encode($value2) . ']: ' . json_encode($new_array) . '</p>';

}
else {
    echo "В форму не был дан массив значений из первого поля";
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