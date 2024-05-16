<?php 

/*for($c=1;$c<=10;$c++){
    echo $c . "\n";

}
$c = 0;
while($c != 10){
   $c ++;
   echo $c ."\n";
}*/

/*$fruits = array("apple","banana","orange");

$i = 0 ;
foreach($fruits as $fruit){
    echo $fruit . $i ."\n";
    $i ++;
}*/
$fruits = array("apple" => "red","banana" => "yellow","orange" => "orange");

foreach($fruits as $fruit => $colors){
    echo $fruit ." and color ".$colors. "\n";
    
}
?>