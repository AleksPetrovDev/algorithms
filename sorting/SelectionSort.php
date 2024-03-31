<?php
include_once "arrays.php";
function selectionSort($arr)
{
    if (!$length = count($arr)) {
        return $arr;
    }
    $start = microtime(true);
    $moves = 0; //debugging

    for ($i = 0; $i < $length; $i++) {
        $j = $i + 1;
        while ($j>0 && isset($arr[$j]) && $arr[$j] < $arr[$j-1] ) {
            [$arr[$j - 1], $arr[$j]] = [$arr[$j], $arr[$j - 1]];
            $j--;
            $moves++;
        }
        if ($i >= $length)
            echo "Iteration: " . ($i + 1) . ", moves: " . ($moves + 1) . PHP_EOL;
    }
    $end = microtime(true);
    echo "Time: " . ($end - $start) . PHP_EOL;
    return $arr;
}

foreach ($list_of_arrays as $array) {
    print_r(selectionSort($array));
}