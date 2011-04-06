<?php

$my_pow = function($times = 2){
	return function ($v) use (&$times){
		return pow($v, $times);
	};
};

$cube = $my_pow(3);

echo $cube(1), PHP_EOL;
echo $cube(2), PHP_EOL;
echo $cube(4), PHP_EOL;
echo $cube(8), PHP_EOL;

?>
