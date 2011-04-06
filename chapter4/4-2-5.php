<?php


//無名関数

$array = array(
	'"ダブルクオート"',
	'<tag>',
	'\'シングルクオート\'',
);

$escaped = array_map(function($value){
	return htmlspecialchars($value, ENT_QUOTES);
}, $array);


var_dump($array);
var_dump($escaped);
?>
