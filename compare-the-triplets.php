<?php

function compareTriplets($a, $b)
{
    $alice = 0;
    $bob = 0;

    for ($i=0; $i < count($a); $i++) { 
        if ($a[$i] > $b[$i]) {
            $alice++;
        } else if ($a[$i] < $b[$i]) {
            $bob++;
        } else {
            continue;
        }
    }

    return [$alice, $bob];
}

$a = [1, 3, 4];
$b = [2, 4, 4];

var_dump(compareTriplets($a, $b));