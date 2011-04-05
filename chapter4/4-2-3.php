<?php

// 引数に与えられた名前をもつ関数が存在すれば呼び出すための関数
function func_caller($name){
	if(function_exists($name)){
		$name();  //可変関数として関数の呼び出し
	}
}

function foo(){
	echo 'foo called', PHP_EOL;
}

func_caller('foo');

?>
