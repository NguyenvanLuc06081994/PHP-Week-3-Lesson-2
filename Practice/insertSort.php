<?php
function insertSort(array $numbers)
{
    for ($i = 0; $i < count($numbers); $i++) {
        $val = $numbers[$i];
        $j = $i - 1;
        while ($j >= 0 && $numbers[$j] > $val) {
            $numbers[$j + 1] = $numbers[$j];
            $j--;
        }
        $numbers[$j + 1] = $val;
    }
    return $numbers;
}

$test_array = [];
for ($i = 0; $i < 5; $i++) {
    $test_array[$i] = rand(0, 5);
}
echo "Original Array : ";
echo implode(', ', $test_array);
echo "<br>";
echo "Sorted array : ";
echo implode(', ', insertSort($test_array));

