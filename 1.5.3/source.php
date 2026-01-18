<?php

$data = [1,2,3,4,5];

for ($i = 0; $i < count($data); $i++) {
    echo "<p>" . json_encode($data[$i]) . "</p>";
}

?>