<?php

//create_function

$array = array(1,2,3,4,5);
$temp = array_map(create_function('$v', 'return $v * 2;'), $array);

var_dump($temp);


//同じ実装を無名関数を用いると、次のようになる
$temp = array_map(function ($v){return $v * 2;},$array);

var_dump($temp);

?>
