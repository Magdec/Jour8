<?php
function calc_average($array): float
{
    $total=$array[0];
    for($i=1; $i<count($array);$i++){
        $total+=$array[$i];
    }
    $average=$total/count($array);
    return round($average,1);
}

var_dump(calc_average(array(1, 4, 28, 12, 3, 4, 4, 27)));