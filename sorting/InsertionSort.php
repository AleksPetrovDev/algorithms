<?php
include_once "arrays.php";
function insertionSort($arr)
{
    if (!$length = count($arr)) {
        return $arr;
    }
    $start = microtime(true);
    $moves = 0; //debugging
    for ($i = 0; $i < $length; $i++) {
        $current = $arr[$i];
        $prev_index = $i - 1;
        //move previous array by index if elements bigger than curren
        while (isset($arr[$prev_index]) && $arr[$prev_index] > $current) {
            $arr[$prev_index + 1] = $arr[$prev_index];
            $prev_index--;
            $moves++;
        }
        //set element into him position
        $arr[$prev_index + 1] = $current;
        if ($i >= $length - 1)
            echo "Iteration: " . ($i + 1) . ", moves: " . ($moves + 1) . PHP_EOL;
    }
    $end = microtime(true);
    echo "Time: " . ($end - $start) . PHP_EOL;
    return $arr;
}

foreach($list_of_arrays as $array) {
    print_r(insertionSort($array));
}