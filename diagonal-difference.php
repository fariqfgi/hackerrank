<?php

function diagonalDifference($arr) {
    $length = count($arr);
    $firstDiagonal = 0;
    $secondDiagonal = 0;
    $lastIndex = $length - 1;
    for($i=0; $i<$length; $i++) {
        $firstDiagonal += $arr[$i][$i];
        $secondDiagonal += $arr[$i][$lastIndex--];
    }
    return abs($firstDiagonal - $secondDiagonal);
}

$arr = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12]
];

var_dump(diagonalDifference($arr));