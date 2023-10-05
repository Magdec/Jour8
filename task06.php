<?php
function sequence($n){
    function init($n): string
    {
        $line1="";
        if ($n >= 0) {
            $line1=$line1."1";
        }
        return $line1;
    }
    $text=init($n);

    function counter($text): string
    {
        $count=1;
        $full_count="";
        for ($i = 1; $i<strlen($text);$i++){
            if ($text[$i]==$text[$i-1]){
                $count++;
            }
            $full_count=$full_count.$count;
        }
        return $full_count;
    }

    function line2($text,$full_count): string
    {
        $line="";
        for ($j=0; $j<strlen($full_count); $j++)
            $line=$line.$line.$full_count[$j].$text[$full_count[$j]-2];
        return $line;
    }


    $rend=init($n)."\n\r".line2("21",counter("21"));
    echo $rend;

}

sequence(2);