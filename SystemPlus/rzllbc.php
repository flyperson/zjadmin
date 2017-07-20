<?php
	//引入连接数据库文件
	require("../conn.php");
//		$sjc=$_POST["sjc"];
        $gcid1=$_POST["gcid1"];
	    $rzll=$_POST["rzll"];
	   
	    
//		echo "$gcmc";	
//  $time=getdate();
//	$timestr=$time['year']."-".$time['mon']."-".$time['mday']."/".$time['hours'].":".$time['minutes'].":".$time['seconds'];
//	$sjc=$timestr;
$sql = "INSERT INTO 日志类型维护 (日志类型) values ('$rzll')";
//$sql = "select * from 工程组维护  where id='$cddid'";
//	$result = $conn->query($sql);
//	$sqli = "update 工程组维护 set 工程组='$gcz',组长姓名='$xm',手机='$sj' where id ='$gcid1'";
if ($conn->query($sql) === TRUE) {
    echo "保存成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();		
?>
<script type="text/javascript">
  window.history.go(-1);
</script>