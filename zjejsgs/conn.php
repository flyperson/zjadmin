<?php
	$servername = "localhost:3305"; //将本地当做服务器，端口默认3306
	$username = "root";  //连接对象
	$password = "";  //连接密码
	$dbname = "zjadmin";	 //数据库名称
	$conn = new mysqli($servername, $username, $password, $dbname);	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		//echo "Connected successfully";
	}

	//检查是否为乱码，是乱码就更换php开发环境
	//echo "321";
?>