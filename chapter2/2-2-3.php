<?php

$foo = 1;

function some_function(){
	$foo = 10;
	$bar = 20;
}

some_function();

echo $foo, PHP_EOL;
echo $bar, PHP_EOL;


?>
