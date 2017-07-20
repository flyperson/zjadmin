<?php
	require("../../conn.php");
	    $xmlb=$_POST["xmlb"];
		$sclb=$_POST["sclb"];
		$oLeft=$_POST["oLeft"];
		$oTop=$_POST["oTop"];
		$zljcid=$_POST["zljcid"];
//		$cddida=$_POST["cddida"];
//		$hello12 = explode("&",$cddida);
//$sql="INSERT INTO 新建测点 (测点类别,测点编号,测点实测值,项目类别,建筑工程id) values ('$cdlb','$cdbh$i','$scz','$xmlb','$jzgcid')";
if($sclb=='实测实量'){
	$sql= "update 实测实量新建测点 set pageX='',pageY='' where 质量检查id='$zljcid' and 项目类别='$xmlb'";
}
else{
	$sql= "update 观感评价新建测点 set pageX='$oLeft',pageY='$oTop' where 质量检查id='' and 项目类别='$xmlb'";
}
if ($conn->query($sql) === TRUE) {
    echo "保存成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();		
?>