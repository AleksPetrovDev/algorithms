<?php
include_once "arrays.php";
function insertionSort($arr)
{
    if (!$length = count($arr)) {
        return $arr;
    }

    $start = microtime(true);
    $moves = 0; //debugging
    $step = $length/2;
    while($step>=1) {
        $step = round($step);
        echo "Step $step".PHP_EOL;
        for ($i = 0; $i < $length; $i+=$step) {
            $current = $arr[$i];
            $prev_index = (int)($i - $step);
            if($prev_index<0){
                continue;
            }
            //move previous array by index if elements bigger than curren
            while (isset($arr[$prev_index]) && $arr[$prev_index] > $current) {
                $arr[$prev_index + $step] = $arr[$prev_index];
                $prev_index-=$step;
                $moves++;
            }
            //set element into him position
            $arr[$prev_index + $step] = $current;
            if ($i >= $length - $step)
                echo "Iteration: " . ($i + 1) . ", moves: " . ($moves + 1) . PHP_EOL;
        }
        $end = microtime(true);
        echo "Time: " . ($end - $start) . PHP_EOL;
        $step = $step/2;

    }
    return $arr;
}

foreach($list_of_arrays as $array) {
    print_r(insertionSort($array));
}