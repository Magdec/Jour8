<?php
function calc(string $operator, int $nbr1, int $nbr2)
{
    switch ($operator) {
        case '+':
            return $nbr1 + $nbr2;
        case '-':
            return $nbr1 - $nbr2;
        case '*':
            return $nbr1 * $nbr2;
        case '/':
            if ($nbr2!=0){
                return $nbr1 / $nbr2;
            }
            else{
                return "Cannot divide by 0";
            }
        case '%':
            return $nbr1 % $nbr2;
        }
        return "Unknown operator";
}

var_dump(calc("+", 1, 3));
var_dump(calc("*", 7, 6));
var_dump(calc("/", 4, 3));
var_dump(calc("+%", 4, 2));
var_dump(calc("/", 4, 0));