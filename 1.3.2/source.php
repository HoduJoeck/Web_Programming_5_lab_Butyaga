<?php

$array = array("1","","2","3","","5");
$new_array = [];

echo "<h4>Дан массив:</h4>";
echo json_encode($array);
echo "<h4>Удалите из массива все пустые строки.</h4>";

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] != "") {
        array_push($new_array, $array[$i]);
    }
}
echo "<h4>Новый массив:</h4>";
echo json_encode($new_array);

?>