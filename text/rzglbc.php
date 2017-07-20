<?php
	//引入连接数据库文件
	require("../conn.php");
	require("upload_file.php");
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
		
	    
//		echo "$gcmc";	
 
$sql = "INSERT INTO 工程日志信息 (部位,日志内容说明,日志日期,日志名称,日志类型,填写人,岗位,接收人,截止日期,任务附件) values ('$bw','$nr','$txsj','$rzmc','$rzlx','$txr','$gw','$jsr','$jzrq','$file')";

if ($conn->query($sql) === TRUE) {
    echo "保存成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();		
?>
