<?php
	require("conn.php");
	$account=$_POST["account"];
	$password=$_POST["password"];	
	
	$sql = "select * from 用户信息 where 账号='".$account."'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if($password==$row["密码"])	{
		$jsonresult='success';
   		
	}else{
		$jsonresult='error'; 
	}	
	$json = '{"result":"'.$jsonresult.'"
			}';
	echo $json;
	$conn->close();
?>