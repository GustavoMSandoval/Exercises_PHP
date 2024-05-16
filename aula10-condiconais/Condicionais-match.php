<?php 

$a = 0;


$result = match($a) {
       1,3,5 => "valid",
       2 => "equal to two",
       default => "none were match",

};
echo $result;
