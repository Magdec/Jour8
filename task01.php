<?php
function discover_type(int $age, string $name, float $gpa, bool $isStudent){
    if ($isStudent){
        echo "Hello my name is $name, I'm $age years old. I'm a student at Epitech with a GPA of $gpa\n\r";
    }
    else{
        echo "Hello my name is $name, I'm $age years old. I'm not a student.\n\r";
    }
}

discover_type(21, "Maria", 3.53, true);
discover_type(52, "Jules", 0, false);