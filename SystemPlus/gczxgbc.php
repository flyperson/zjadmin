<?php
	//引入连接数据库文件
//	$timestr=$time['year']."-".$time['mon']."-".$time['mday']."/".$time['hours'].":".$time['minutes'].":".$time['seconds'];
//	$sjc=$timestr;
//		$sjcc =strtotime(".$sjc.");
//		$file=$_POST["file"];
	require("../conn.php");
	
		$id=$_POST["id"];
		$gcz=$_POST["gcz"];
	    $xm=$_POST["xm"];
	    $sj=$_POST["sj"];
		
	$sql = "select * from 工程组维护  where id='$id'";
	$result = $conn->query($sql);
	$sqli = "update 工程组维护 set 工程组='$gcz',组长姓名='$xm',手机='$sj' where id ='$id'";

if ($conn->query($sqli) === TRUE) {
    echo "修改成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();		
?>
<script type="text/javascript">
  window.history.go(-2);
  location.reload();
</script>
