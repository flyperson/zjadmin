<?php
	//引入连接数据库文件
	$timestr=$time['year']."-".$time['mon']."-".$time['mday']."/".$time['hours'].":".$time['minutes'].":".$time['seconds'];
		$sjc=$timestr;
		$sjcc =strtotime(".$sjc.");
		$file=$_POST["file"];
		$sjcca = time();
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
		$zljcsjc=$_POST["zljcsjc"];
		$xmlb=$_POST["xmlb"];
		$sclb=$_POST["sclb"];
		$zljcid=$_POST["zljcid"];
		    if ($ywjsc = "1") 
			{$kgbgfjsc1=$sjcca."1".$_FILES["file"]["name"];}
			else {$kgbgfjsc1=$_FILES["file"]["name"];}
//		echo "$gcmc";	
	
	$time=getdate();
	$timestr=$time['year']."-".$time['mon']."-".$time['mday']."/".$time['hours'].":".$time['minutes'].":".$time['seconds'];
//	$sjc=$timestr;
	$sjc=$_POST["sjc"];
//	$sql = "select * from 建筑工程  where id='$id'";
//	$result = $conn->query($sql);
//	$sqli = "update 质量检查 set 标题名称='$btmc',组长姓名='$zzxm',检查部位='$jcbw',检查日期='$jcrq',检查人员='$jcry',施工班组='$sgbz',联系方式='$lxfs',施工日期='sgrq',工作描述='$gzms',附件上传='$kgbgfjsc1' where id ='$id'";
	$sqli = "update 质量检查 set 标题名称='$btmc',组长姓名='$zzxm',检查部位='$jcbw',检查日期='$jcrq',检查人员='$jcry',施工班组='$sgbz',联系方式='$lxfs',施工日期='sgrq',工作描述='$gzms' where id ='$id'";
	$sql1 = "select * from 测点布置附件表  where 质量检查id='$zljcid' and 实测类别='$sclb' and 项目类别='$xmlb'";
	$result = $conn->query($sql1);
	if ($result->num_rows > 0) {
    	$sql = "update 测点布置附件表 set 测点附件='$kgbgfjsc1' where 质量检查id ='$zljcid' and 实测类别='$sclb' and 项目类别='$xmlb'";
		$conn->query($sql);
//		echo '3214';
	} else {
	    $sql2 = "INSERT INTO 测点布置附件表(质量检查id,时间戳,测点附件,项目类别,实测类别) values ('$zljcid','$zljcsjc','$kgbgfjsc1','$xmlb','$sclb')";
		$conn->query($sql2);
//		echo '123';
	}
	
if ($conn->query($sqli) === TRUE) {
    echo "修改成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();		
?>
<script type="text/javascript">
//window.history.go(-1);
  self.location=document.referrer;
</script>
