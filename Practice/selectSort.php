<?php
function selectSort(array $arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $arr = swap_position($arr, $i, $min);
    }
    return $arr;
}

function swap_position($arr, $left, $right)
{
    $temp = $arr[$right];
    $arr[$right] = $arr[$left];
    $arr[$left] = $temp;
    return $arr;
}

$myArray = array(3, 0, 2, 5, -1, 4, 1);
echo "Original array : ";
echo implode(", ", $myArray);
echo "<br>";
echo "Sorted array : " . implode(', ', selectSort($myArray));