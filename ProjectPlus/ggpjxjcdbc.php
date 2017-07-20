<?php
	require("../conn.php");
		$cdlb=$_POST["cdlb"];
		$cdbh=$_POST["cdbh"];
		$scz=$_POST["scz"];
		$xmlb=$_POST["xmlb"];
		$cdsl=$_POST["cdsl"];
		$jzgcid=$_POST["jzgcid"];
		for ($i=1;$i<=$cdsl;$i++){
$sql="INSERT INTO 观感评价新建测点 (测点类别,测点编号,测点实测值,项目类别,建筑工程id) values ('$cdlb','$cdbh$i','$scz','$xmlb','$jzgcid')";

if ($conn->query($sql) === TRUE) {
    echo "保存成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();		
?>