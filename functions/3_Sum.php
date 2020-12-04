<?php
function sum($x, $y){
    return (is_int($x) AND is_int($y)) ? $x+$y : "Error: argument is not a number.";
}
echo sum(5, 2);
echo sum(x, 3);
?>