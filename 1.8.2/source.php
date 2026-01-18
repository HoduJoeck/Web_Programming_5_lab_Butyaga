<?php

$array = [
	[1, 2, 3],
	[1, 2],
	[1, 2, 3, 4, 5],
	[1],
	[1, 2, 3, 4],
];

echo("<h2>Отсортированный массив:</h2>");
/* массив для хранения длин подмассивов $array */
$match_array = [];
for ($i = 0; $i < count($array); $i++) {
    array_push($match_array, count($array[$i]));
}
/* отсортировали существующие длины массивов */
sort($match_array);
$sort_array = [];
for ($i = 0; $i < count($match_array); $i++) {
    for ($j = 0; $j < count($array); $j++) {
        // если длина подмассива $array == длине из массива $match_array
        if (count($array[$j]) == $match_array[$i]) {
            $sort_array[] = $array[$j]; //то присвоить следующему элементу $sort_array подмассив из $array 
           break;
        }
    }
}
for ($i = 0; $i < count($sort_array); $i++) {
    echo(json_encode($sort_array[$i]) . "<br>");
}

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