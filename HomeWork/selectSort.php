<?php

function selectSortByMax(array $arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $max = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] > $arr[$max]) {
                $max = $j;
            }
        }
        $arr = swapPosition($arr,$i,$max);
    }
    return $arr;
}
function swapPosition($arr,$left,$right){
    $temp = $arr[$right];
    $arr[$right] = $arr[$left];
    $arr[$left] = $temp;
    return $arr;
}
echo "<pre>";
print_r(selectSortByMax([1,2,3]));
