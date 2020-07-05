<?php
$myArr = [];
for ($i = 0; $i < 15; $i++) {
    $myArr[$i] = rand(0, 15);
}
$count = count($myArr);
for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j < $count - $i - 1; $j++) {
        if ($myArr[$j] < $myArr[$j + 1]) {
            $temp = $myArr[$j + 1];
            $myArr[$j + 1] = $myArr[$j];
            $myArr[$j] = $temp;
        }
    }
}
for ($i = 0; $i < $count; $i++) {
    echo $myArr[$i] . " ";
}