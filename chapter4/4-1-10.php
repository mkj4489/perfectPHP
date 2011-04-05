<?php


date_default_timezone_set('Asia/Tokyo');
$hour = date('G');

switch($hour){
	case '6':
		echo '朝の６時です。おはようございます。', PHP_EOL;
		break;
	case '12':
		echo '正午です。こんにちは。', PHP_EOL;
		break;
	case '15':
		echo '3時のおやつの時間です。', PHP_EOL;
		break;
	default:
		echo 'どうも', PHP_EOL;
		break;

}



?>
