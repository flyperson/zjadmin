<?php
	$servername = "localhost:3305"; //�����ص������������˿�Ĭ��3306
	$username = "root";  //���Ӷ���
	$password = "";  //��������
	$dbname = "zjadmin";	 //���ݿ�����
	$conn = new mysqli($servername, $username, $password, $dbname);	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		//echo "Connected successfully";
	}

	//����Ƿ�Ϊ���룬������͸���php��������
	//echo "321";
?>