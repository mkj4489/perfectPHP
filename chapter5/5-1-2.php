<?php

/*
コンストラクタは、オブジェクトを生成する上で必要なパラメータや、そのクラスのオプションなどを引数と受け取り、プロパティにセットするなどという役割を果たす。
*/

class Employee{
	const PARTIME = 1;
	const REGULAR = 2;
	const CONTRACT = 3;

	private $name;
	private $type;

	public function __construct($name, $type){
echo		$this->name = $name;
echo		$this->type = $type;
	}

	public static $company = '技評技術社';
	public static function getCompany(){
		return self::$company;
	}

	public static function setCompany($value){
		self::$company = $value;
	}

	private $state = '働いている';

	public function getState(){
		return $this->state;
	}

	public function setState($state){
		$this->state = $state;
	}

	public function work(){
		echo '書類をせいりしています', PHP_EOL;
	}
}

/*
staticプロパティは、オブジェクトによらずそのクラスに共通の変数のようなもの
*/


$yamada = new Employee('山田', Employee::REGULAR);
//echo '従業員はみんな', Employee::$company, PHP_EOL;
//$yamada->name = '山田';
$yamada->setState('休憩している');
//echo $yamada->getState(), $yamada->name, 'さん:';
$yamada->work();


//同じオブジェクトを指し示す変数となる
$suzuki = $yamada;

//オブジェクトの参照を渡すのではなく、複製したい場合はcloneを使う
$suzuki = clone $yamada;


/*
アクセス演算子
public クラスの外側から呼び出し、参照／呼び出しできる
private 自分のクラスの内側からのみ参照／呼び出しができる
protected 自分のクラスの内側または自分のクラスを継承したクラスの内側からのみ参照／呼び出しができる
*/



?>
