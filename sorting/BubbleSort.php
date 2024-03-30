<?php
include_once "arrays.php";
function bubbleSort($array)
{
    if (!$length = count($array)) {
        return $array;
    }
    $start = microtime(true);
    $iteration = $length - 1;
    $loop = 0;
    while ($iteration > 0) {
        for ($i = 0; $i < $iteration; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                list($array[$i], $array[$i + 1]) = [$array[$i + 1], $array[$i]];
            }
            if($i >= $iteration-1)
            echo "Iteration: ".($i+1).", loop: ".($loop+1).PHP_EOL;
        }
        $iteration--;
        $loop++;
    }
    $end = microtime(true);
    echo "Time: ".($end - $start).PHP_EOL;
    return $array;
}


foreach($list_of_arrays as $array) {
    print_r(bubbleSort($array));
}