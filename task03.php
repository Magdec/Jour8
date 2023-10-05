<?php
function get_shortest($array) {
    $lengths = array_map('strlen', $array);
    $min=0;
        for ($i=1; $i<count($lengths); $i++){
            if ($lengths[$i]<$lengths[$i-1]){
                $min=$i;
            }
        }
        return $array[$min];
}

var_dump(get_shortest(array("Time", "flowing", "like", "a", "river")));
var_dump(get_shortest(array("Run", "like", "hell")));
var_dump(get_shortest(array("chou", "be", "do")));
