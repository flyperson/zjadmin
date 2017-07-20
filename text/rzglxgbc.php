<?php
	//引入连接数据库文件
	require("../conn.php");
	require("upload_file.php");
	    $gcid=$_POST["gcid"];
		
		$file=$_FILES["file"]["name"];
		$bw=$_POST["bw"];
		$nr=$_POST["nr"];
		$rzmc=$_POST["rzmc"];
		$txsj=$_POST["txsj"];
		$rzlx=$_POST["rzlx"];
		$txr=$_POST["txr"];
		$gw=$_POST["gw"];
		$jsr=$_POST["jsr"];
		$jzrq=$_POST["jzrq"];
		
		
		echo $id;
			
	
	$sql ="select * from 工程日志信息   where id ='$gcid' ";

	$result = $conn->query($sql);					
	if($result->num_rows > 0){
		$sqli = "update 工程日志信息  set 日志名称='$rzmc',部位='$bw',日志内容说明='$nr',日志日期='$txsj',日志类型='$rzlx',接收人='$jsr',截止日期='$jzrq',岗位='$gw',任务附件='$file',部位='$bw',填写人='$txr' where id='$gcid' ";
		if($conn->query($sqli)){
			$jsonresult = "success";
		}else{
			$jsonresult = "error";
		}	
	}else{
		$jsonresult='1';				
	}




if ($conn->query($sql) === TRUE) {
    echo "修改成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();		
?>
