<?php
/********************************************************
*  Settings file
*
*  https://coderlog.top
*  https://youtube.com/CoderLog
********************************************************/
$api = '5304815756:AAGNcHP1QmZYL5FMUm5i0RWs_vbP9GQx0AY';
define('MYSQL_SERVER', '');
define('MYSQL_USER', '');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', '');


function db_connect(){
	$connect = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
		or die("Error: ".mysqli_error($connect));
	if(!mysqli_set_charset($connect, "utf8mb4")){
		print("Error: ".mysqli_error($connect));
	}
	return $connect;
}

$connect = db_connect();

?>