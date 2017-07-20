<?php
	require("../conn.php");
	$sql = "select * from  实测实量新建测点 where 项目类别='混凝土结构工程' ";
	$result = $conn->query($sql);
	$count=mysqli_num_rows($result);
	$sqldate="";	
	if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
		 $sqldate= $sqldate.'{"测点类别":"'.$row["测点类别"].'"},{"测点编号":"'.$row["测点编号"].'"},{"id":"'.$row["id"].'"},{"测点实测值":"'.$row["测点实测值"].'"},';
		 }
	} else {
		//echo "0 results";
	}
	//echo $sqldate;
	$jsonresult='success';
	$otherdate = '{"result":"'.$jsonresult.'",
				"count":"'.$count.'"
				}';
				
//	$json = '['.$sqldate.$otherdate.']';
	$json = '['.$sqldate.']';
	echo $json;
	$conn->close();
?>