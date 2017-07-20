<?php
	//引入连接数据库文件
	$timestr=$time['year']."-".$time['mon']."-".$time['mday']."/".$time['hours'].":".$time['minutes'].":".$time['seconds'];
		$sjc=$timestr;
		$sjcc =strtotime(".$sjc.");	
	require("../conn.php");
        $sjc=$_POST["sjc"];
		$gcmc=$_POST["gcmc"];
	    $btmc=$_POST["btmc"];
	    $jcbw=$_POST["jcbw"];
	    $jcrq=$_POST["jcrq"];
	    $jcry=$_POST["jcry"];
	    $sgbz=$_POST["sgbz"];
	    $lxfs=$_POST["lxfs"];
	    $sgrq=$_POST["sgrq"];
	    $gcid=$_POST["gcid"];
	    $zzxm=$_POST["zzxm"];
	    $xmlb=$_POST["xmlb"];
	    
	    
//		echo "$gcmc";	
//  $time=getdate();
//	$timestr=$time['year']."-".$time['mon']."-".$time['mday']."/".$time['hours'].":".$time['minutes'].":".$time['seconds'];
//	$sjc=$timestr;
$sql = "INSERT INTO 装饰工程(标题名称,检查部位,检查日期,检查人员,施工班组,组长姓名,联系方式,工程id,施工日期,项目类别) values ('$btmc','$jcbw','$jcrq','$jcry','$sgbz','$zzxm','$lxfs','$gcid','$sgrq','$xmlb')";

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