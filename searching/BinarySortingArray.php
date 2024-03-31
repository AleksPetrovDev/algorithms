<?php

$arrays = [
    [],
    [3],
    [77],
    [1, 2, 7, 77],
    [1, 2, 3, 4, 5, 6, 77, 8, 9, 0],
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 77, 99],
];

function binarySearch(array $arr, int $search)
{
    echo "Search: " . $search . PHP_EOL;
    echo "Into: ".print_r($arr,true) . PHP_EOL;
    if (!count($arr)) return -1;
    if (count($arr) == 1) return ($arr[0] == $search) ? 0 : -1;
    $start = 0;
    $end = count($arr) - 1;
    $timeStart = microtime(true);
    $iteration = 0;
    while ($start <= $end) {
        $iteration++;
        $middle = round($start + ($end - $start) / 2);
        if ($search == $arr[$middle]) {
            $timeEnd = microtime(true);
            echo "Time: " . ($timeEnd - $timeStart) . PHP_EOL;
            echo "Iteration: " . $iteration . PHP_EOL;
            return $middle;
        }
        if ($middle == $end) {
            return -1;
        }
        if ($search > $arr[$middle]) {
            $start = $middle;
        }
        if ($search < $arr[$middle]) {
            $end = $middle;
        }
    }
    return -1;
}

$search = 77;
foreach ($arrays as $array) {
    $result = binarySearch($array, $search);
    if ($result == -1) {
        echo "Not found " . PHP_EOL;
    } else {
        echo "Found index: " . $result . PHP_EOL;
    }
    echo "===============".PHP_EOL;
}