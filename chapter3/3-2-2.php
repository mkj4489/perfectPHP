<?php


echo $param = isset($argv[1]) ? $argv[1] : 'default';

if(isset($argv[1])){
	$param = $argv[1];
}else{
	$param = 'default';
}

echo $param;
