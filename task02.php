<?php
function dog_bark($woof_nb){
    for($i=1;$i<=$woof_nb;$i++){
        if ($i<$woof_nb) {
            echo "woof ";
        }
        else{
            echo ("woof\n\r");
        }
    }
    if ($woof_nb<0){
        echo ("\n\r");
    }
}

dog_bark(1);
dog_bark(-42);
dog_bark(3);