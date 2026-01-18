<?php

$url = 'http://test.com/dir1/dir2/dir3/page.html';

$start_pos = strpos($url,'//')+2;
$end_pos = strpos($url,'/', $start_pos);
echo(json_encode(substr($url,$start_pos,$end_pos-$start_pos)));


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