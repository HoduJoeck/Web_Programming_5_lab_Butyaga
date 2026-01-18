<?php

$array = [["2","1","4","3","5"], ["3","5","2","4","1"], ["4","3","1","5","2"]];

echo "<h4>Дан массив:<br>";
echo "[" . json_encode($array[0]) . ",<br>";
echo json_encode($array[1]) . ",<br>";
echo json_encode($array[2]) . "]</h4>";
echo "<h4>Отсортируйте элементы в каждом подмассиве.</h4>";

echo "<h4>Отсортированный массив:</h4>";
for ($i = 0; $i < count($array); $i++) {
    sort($array[$i]);
    echo json_encode($array[$i]) ."<br>";
}
?>