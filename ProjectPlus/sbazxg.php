<?php
	//引入连接数据库文件
	$timestr=$time['year']."-".$time['mon']."-".$time['mday']."/".$time['hours'].":".$time['minutes'].":".$time['seconds'];
		$sjc=$timestr;
		$sjcc =strtotime(".$sjc.");
		$file=$_POST["file"];
	require("../conn.php");
	require("upload_file.php");
		$id=$_POST["id"];
		$btmc=$_POST["btmc"];
		$jcbw=$_POST["jcbw"];
		$jcrq=$_POST["jcrq"];
		$jcry=$_POST["jcry"];
		$sgbz=$_POST["sgbz"];
		$zzxm=$_POST["zzxm"];
		$lxfs=$_POST["lxfs"];
		$sgrq=$_POST["sgrq"];
		$gzms=$_POST["gzms"];
		
		
		    if ($ywjsc = "1") 
			{$kgbgfjsc1=(strtotime(".$sjcc."))."1".$_FILES["file"]["name"];}
			else {$kgbgfjsc1=$_FILES["file"]["name"];}
//		echo "$gcmc";	
	
	$time=getdate();
	$timestr=$time['year']."-".$time['mon']."-".$time['mday']."/".$time['hours'].":".$time['minutes'].":".$time['seconds'];
//	$sjc=$timestr;
	$sjc=$_POST["sjc"];
	$sql = "select * from 装饰工程  where id='$id'";
	$result = $conn->query($sql);
	$sqli = "update 装饰工程 set 标题名称='$btmc',组长姓名='$zzxm',检查部位='$jcbw',检查日期='$jcrq',检查人员='$jcry',施工班组='$sgbz',联系方式='$lxfs',施工日期='sgrq',工作描述='$gzms',附件上传='$kgbgfjsc1' where id ='$id'";

if ($conn->query($sqli) === TRUE) {
    echo "修改成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();		
?>
<script type="text/javascript">
  window.history.go(-1);
</script>
