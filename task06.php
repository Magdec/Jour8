<?php
function sequence($n){
    function init($n){
        $text="";
        if ($n >= 0) {
            $text=$text."1";
        }
        return $text;
    }

    function counter($text){
        for ($i = 1; $i<strlen($text);$i++){
            $count=1;
            while($text[$i]==$text[$i-1])
                $count++;
            endwhile return $count;


        else
        }
    }

    for($i=0;$i<=$n;$i++){

        if ($i>0){
            for ($j=1;$j<strlen($text);$j++)
            $count=1;
                if ($text[$j]!=$text[$j-1])
                    echo $count;
                else
                    $text=$text.$total;

            echo "$text \n\r";
        }
    }

}

sequence(1);