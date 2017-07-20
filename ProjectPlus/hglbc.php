<?php
	require("../conn.php");
		$hnthelpj=$_POST["hnthelpj"];
		$zljcid=$_POST["zljcid"];
		$xmlba=$_POST["xmlba"];
		$gcid=$_POST["gcid"];
		$sjc=$_POST["sjc"];
		$scgglb=$_POST["scgglb"];
	$sql1 = "select * from 统计  where 质量检查id='$zljcid' and  项目类别='$xmlba' and 实测观感='$scgglb' ";
	$result = $conn->query($sql1);
	if ($result->num_rows > 0) {
    	$sql = "update 统计 set 合格率='$hnthelpj' where 质量检查id ='$zljcid' and 项目类别='$xmlba' and 实测观感='$scgglb'";
		$conn->query($sql);
//		echo '3214';
	} else {
	    $sql2 = "INSERT INTO 统计(质量检查id,项目类别,合格率,时间戳,工程id,实测观感) values ('$zljcid','$xmlba','$hnthelpj','$sjc','$gcid','$scgglb')";
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