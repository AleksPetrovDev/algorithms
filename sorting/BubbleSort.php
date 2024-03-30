<?php

function bubbleSort($array)
{
    if (!$length = count($array)) {
        return $array;
    }
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
    return $array;
}

var_dump(bubbleSort([3, 2, 4, 5, 6, 7, 55, 21, 0]));
var_dump(bubbleSort([]));
var_dump(bubbleSort([1,2,3]));