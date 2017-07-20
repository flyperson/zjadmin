<?php
	require("../conn.php");		
	$gclb=$_POST["gclb"];//工程类别
	$sqldate="";
//	$sqldate1="";
	$sql = "select * from  建筑工程质量检测表 a,实测实量新建测点 b where a.检查项目=b.项目类别 and a.检查项目='".$gclb."'";
//	$sql1 = "select * from 实测实量新建测点 where 项目类别='混凝土结构工程' ";
	$result = $conn->query($sql);
//	$result1 = $conn->query($sql1);
	$count=mysqli_num_rows($result);	
//	$count1 = mysqli_num_rows($result1);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$sqldate= $sqldate.'{"检查内容":"'. $row["检查内容"].'","评判标准":"'. $row["评判标准"].'","测点类别":"'. $row["测点类别"].'","测点实测值":"'. $row["测点实测值"].'"},';
			}
//		while($row1 = $result1->fetch_assoc()){
//			$sqldate1= $sqldate1.'{"测点类别":"'. $row1["测点类别"].'","测点实测值":"'. $row1["测点实测值"].'"},';
//		}
		} else { 
			
		} 
		$jsonresult = 'success';
		$otherdate = '{"result":"'.$jsonresult.'",
						"count":"'.$count.'"
					}';
		$json = '['.$sqldate.$otherdate.']';
	echo $json;

?>