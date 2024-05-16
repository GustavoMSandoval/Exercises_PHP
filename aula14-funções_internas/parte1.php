<?php 

$string = "Hello World";
echo strtolower($string."\n");

echo substr($string,2,2)."\n";

print_r(explode(" ",$string));//divide

echo rand(1,5)."\n";
///////


$array = ["apple","banana","orange"];

echo count($array)."\n";

echo is_array($array);

print_r(array_reverse($array));
//array_merge() to merge two arrays

echo date("Y-m-d   H:i:s");

if(in_array("apple",$array,true)){//strict type '12' != 12
    echo ' ok';

}
    