<?php
	require("../conn.php");
		$cdlb=$_POST["cdlb"];
//		$cdbh=$_POST["cdbh"];
		$scz=$_POST["scz"];
		$xmlb=$_POST["xmlb"];
		$cdsl=$_POST["cdsl"];
		$jzgcid=$_POST["jzgcid"];
		if ($xmlb == "设备安装工程") {
	if ($cdlb == "并列插座开关面板高度差") {
		$cdbh = "A";
	} elseif ($cdlb == "座厕坑距偏差") {
		$cdbh = "B";	
	} else {

	}
} 
else {
		
	}
		for ($i=1;$i<=$cdsl;$i++){
$sql="INSERT INTO 实测实量新建测点 (测点类别,测点编号,测点实测值,项目类别,质量检查id) values ('$cdlb','$cdbh$i','$scz','$xmlb','$jzgcid')";

if ($conn->query($sql) === TRUE) {
    echo "保存成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();		
?>