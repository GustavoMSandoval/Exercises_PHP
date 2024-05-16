<?php 
$food = [
    "fruits" => array("banana","kiwi"),
];

//echo$food[0][1] ;
echo $food["fruits"][0] ;

/*$n = [
    '3','4','6'
];
$n[3] = '0';
echo implode(' ',$n);*/

$n = range(5,8,2);
foreach($n as $v){
    echo $v.' ';
}

