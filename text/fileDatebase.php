<?php
	require("../conn.php");
	
	//时间戳获取
	$sjc=$_POST["sjc"];
	$wdlb=$_POST["wdlb"];
	$time=getdate();
	$timestr=$time['year']."-".$time['mon']."-".$time['mday']."/".$time['hours'].":".$time['minutes'].":".$time['seconds'];
	
	if($sjc){
		$sql = "select * from 文件附件 where 时间戳='".$sjc."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$jsonresult='1';
		} else {
			$sqli = "insert into 文件附件 (时间戳,文件名称,文件大小,文件格式,文档类别) values ('$sjc','$fileNmae','$fileSize','$temp[1]','$wdlb')";
				
			if ($conn->query($sqli) === TRUE) {
				$jsonresult='success';
//				$headerpag="wdgl.php";
			} else {
				$jsonresult='error';
			}
		}
		
		//$json = '{"result":"'.$jsonresult.'"		
			//	}';
		echo $json;
		$conn->close();
		header("refresh:0;url=".$headerpag);
	}
?>
<script>
//	history.go(-1);
//	location.reload();
	window.history.go(-1);
	window.loaction.reload();
</script>