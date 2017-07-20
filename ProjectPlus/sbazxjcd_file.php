<?php
	require("../conn.php");
		$cdlb=$_POST["cdlb"];
		$cdbh=$_POST["cdbh"];
		$scz=$_POST["scz"];
		$xmlb=$_POST["xmlb"];
		$cdsl=$_POST["cdsl"];
		$jzgcid=$_POST["jzgcid"];
		$cddid=$_POST["cddid"];
$sql="INSERT INTO 装饰工程新建测点 (测点类别,测点编号,测点实测值,项目类别,装饰工程id) values ('$cdlb','$cdbh$i','$scz','$xmlb','$jzgcid')";
	$sql = "select * from 装饰工程新建测点  where id='$cddid'";
	$result = $conn->query($sql);
	$sqli = "update 装饰工程 set 标题名称='$btmc',组长姓名='$zzxm',检查部位='$jcbw',检查日期='$jcrq',检查人员='$jcry',施工班组='$sgbz',联系方式='$lxfs',施工日期='sgrq',工作描述='$gzms',附件上传='$kgbgfjsc1' where id ='$id'";
if ($conn->query($sql) === TRUE) {
    echo "保存成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();		
?>