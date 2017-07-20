<?php
	//引入连接数据库文件
	
	$timestr=$time['year']."-".$time['mon']."-".$time['mday']."/".$time['hours'].":".$time['minutes'].":".$time['seconds'];
		$sjc=$timestr;
		$sjcc =strtotime(".$sjc.");	
		
	require("../conn.php");
		$sjc=$_POST["sjc"];
		$gcmc=$_POST["gcmc"];
//	    $zljcbh=$_POST["zljcbh"];
	    $jcdw=$_POST["jcdw"];
	    $jcrq=$_POST["jcrq"];
	    $jcry=$_POST["jcry"];
	    $sgbz=$_POST["sgbz"];
	    $lxfs=$_POST["lxfs"];
	    $sgrq=$_POST["sgrq"];
	    $gcid=$_POST["gcid"];
	    $zzxm=$_POST["zzxm"];
	    $xmlb=$_POST["xmlb"];
	    $btmc=$_POST["btmc"];
	    $sgbz=$_POST["sgbz"];
		$zzxm=$_POST["zzxm"];
	    $gzms=$_POST["gzms"];
//		echo "$gcmc";	
 
$sql = "INSERT INTO 质量检查(工程名称,标题名称,检查部位,检查日期,检查人员,工程id,时间戳,施工班组,组长姓名,联系方式,工作描述) values ('$gcmc','$btmc','$jcdw','$jcrq','$jcry','$gcid',".strtotime(".$sjcc.").",'$sgbz','$zzxm','$lxfs','$gzms')";

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