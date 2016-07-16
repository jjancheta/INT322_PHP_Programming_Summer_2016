<?php
function connectionDB(){
		$file = file('../../../../secret/topsecret');
		$serverDB = trim($file[0]);
		$userName = trim($file[1]);
		$userPwd = trim($file[2]);
		$nameDB = trim($file[3]);
		$connect = mysqli_connect($serverDB, $userName, $userPwd, $nameDB);
		return $connect;
	}
?>    