<?php
	require("../conn.php");
		$cdlb=$_POST["cdlb"];
		$cdbh=$_POST["cdbh"];
		$scz=$_POST["scz"];
		$xmlb=$_POST["xmlb"];
		$cdsl=$_POST["cdsl"];
		$zljcsjc=$_POST["zljcsjc"];
		$jzgcid=$_POST["jzgcid"];
		$nr=$_POST["nr"];
		if ($xmlb == "混凝土结构工程") {
	if ($cdlb == "截面尺寸") {
		$cdbh = "A";
	} elseif ($cdlb == "墙表面平整度") {
		$cdbh = "B";	
	} elseif ($cdlb == "垂直度（抹灰）") {
		$cdbh = "C";
	} elseif ($cdlb == "垂直度（免抹灰）") {
		$cdbh = "D";
	} elseif ($cdlb == "顶板水平度") {
		$cdbh = "E";
	} elseif ($cdlb == "楼板厚度") {
		$cdbh = "F";
	} else {

	}
} else if ($xmlb == "砌筑工程") {
	if ($cdlb == "表面平整度") {
		$cdbh = "A";
	} elseif ($cdlb == "垂直度") {
		$cdbh = "B";
	} elseif ($cdlb == "外窗洞口尺寸") {
		$cdbh = "C";
	} else {

	}
} else if ($xmlb == "抹灰工程") {
	if ($cdlb == "墙面表面平整度") {
		$cdbh = "A";
	} elseif ($cdlb == "墙面垂直度") {
		$cdbh = "B";
	} elseif ($cdlb == "阴阳角方正") {
		$cdbh = "C";
	} elseif ($cdlb == "方正性") {
		$cdbh = "D";
	} elseif ($cdlb == "地面表面平整度(1)") {
		$cdbh = "E";
	}elseif ($cdlb == "地面表面平整度(2)") {
		$cdbh = "F";
	} elseif ($cdlb == "门洞尺寸偏差(1)") {
		$cdbh = "G";
	} elseif ($cdlb == "门洞尺寸偏差(2)") {
		$cdbh = "H";
	} elseif ($cdlb == "门洞尺寸偏差(3)") {
		$cdbh = "I";
	} elseif ($cdlb == "外窗内侧墙体厚度极差") {
		$cdbh = "J";
	} elseif ($cdlb == "厨卫间开间/进深偏差") {
		$cdbh = "K";
	} else {

	}
} else if ($xmlb == "设备安装工程") {
	if ($cdlb == "座便坑距偏差") {
		$cdbh = "A";
	} else {

	}
} else if ($xmlb == "墙面涂饰面") {
	if ($cdlb == "开间/进深极差") {
		$cdbh = "A";
	} elseif ($cdlb == "墙面平整度(1)") {
		$cdbh = "B";
	} elseif ($cdlb == "墙面平整度(2)") {
		$cdbh = "C";
	} elseif ($cdlb == "墙面垂直度(1)") {
		$cdbh = "D";
	} elseif ($cdlb == "墙面垂直度(2)") {
		$cdbh = "E";
	} elseif ($cdlb == "阴阳角(1)") {
		$cdbh = "F";
	} elseif ($cdlb == "阴阳角(2)") {
		$cdbh = "G";
	} elseif ($cdlb == "顶板水平度(1)") {
		$cdbh = "H";
	} elseif ($cdlb == "顶板水平度(2)") {
		$cdbh = "I";
	} elseif ($cdlb == "垂直度(瓷砖墙面)") {
		$cdbh = "J";
	}elseif ($cdlb == "垂直度(石材墙面)") {
		$cdbh = "K";
	} elseif ($cdlb == "垂直度(木质墙面)") {
		$cdbh = "L";
	} elseif ($cdlb == "阴阳角(瓷砖墙面)") {
		$cdbh = "M";
	} elseif ($cdlb == "阴阳角(石材墙面)") {
		$cdbh = "N";
	} elseif ($cdlb == "阴阳角(木质墙面)") {
		$cdbh = "O";
	} elseif ($cdlb == "接缝高低差(瓷砖墙面)") {
		$cdbh = "P";
	}elseif ($cdlb == "接缝高低差(石材墙面)") {
		$cdbh = "Q";
	} elseif ($cdlb == "接缝高低差(木质墙面)") {
		$cdbh = "R";
	}  else {

	}
} else if ($xmlb == "墙面饰面砖") {
	if ($cdlb == "垂直度(瓷砖墙面)") {
		$cdbh = "A";
	} elseif ($cdlb == "垂直度(石材墙面)") {
		$cdbh = "B";
	} elseif ($cdlb == "垂直度(木质墙面)") {
		$cdbh = "C";
	} elseif ($cdlb == "阴阳角(瓷砖墙面)") {
		$cdbh = "D";
	} elseif ($cdlb == "阴阳角(石材墙面)") {
		$cdbh = "E";
	} elseif ($cdlb == "阴阳角(木质墙面)") {
		$cdbh = "F";
	} elseif ($cdlb == "接缝高低差(瓷砖墙面)") {
		$cdbh = "G";
	} elseif ($cdlb == "接缝高低差(石材墙面)") {
		$cdbh = "H";
	} elseif ($cdlb == "接缝高低差(木质墙面)") {
		$cdbh = "I";
	} elseif ($cdlb == "表面平整度(地砖地面)") {
		$cdbh = "J";
	}elseif ($cdlb == "表面平整度(石材地面)") {
		$cdbh = "K";
	} elseif ($cdlb == "接缝高低差") {
		$cdbh = "L";
	}  else {

	}
} else if ($xmlb == "地面饰面砖") {
	if ($cdlb == "表面平整度(地砖地面)") {
		$cdbh = "A";
	} elseif ($cdlb == "表面平整度(石材地面)") {
		$cdbh = "B";
	} elseif ($cdlb == "接缝高低差") {
		$cdbh = "C";
	} else {

	}
}  else if ($xmlb == "木地板安装") {
	if ($cdlb == "找平层平整度") {
		$cdbh = "A";
	} elseif ($cdlb == "木地板平整度") {
		$cdbh = "B";
	}  else {

	}
} else if ($xmlb == "电梯前室、首层大堂") {
	if ($cdlb == "墙面砖垂直度(瓷砖墙面)") {
		$cdbh = "A";
	} elseif ($cdlb == "墙面砖垂直度(石材墙面)") {
		$cdbh = "B";
	} elseif ($cdlb == "墙面砖垂直度(木质墙面)") {
		$cdbh = "C";
	} elseif ($cdlb == "墙面砖接缝高低差") {
		$cdbh = "D";
	} elseif ($cdlb == "地面砖表面平整度(地砖地面)") {
		$cdbh = "E";
	} elseif ($cdlb == "地面砖表面平整度(石材地面)") {
		$cdbh = "F";
	} elseif ($cdlb == "地面砖接缝高低差") {
		$cdbh = "G";
	}  else {

	}
}else if ($xmlb == "设备安装") {
	if ($cdlb == "并列插座开关面板高度差") {
		$cdbh = "A";
	} elseif ($cdlb == "座厕坑距偏差") {
		$cdbh = "B";	
	}
}
else {

}
$sql1="select * from 实测实量新建测点 where 项目类别='".$xmlb."' and 质量检查id='".$jzgcid."' and 测点编号 like '%".$cdbh."%' ";
$result = $conn -> query($sql1);
$count = mysqli_num_rows($result);
//echo $count;
		for ($i=$count+1;$i<=$cdsl+$count;$i++){
$sql="INSERT INTO 实测实量新建测点 (测点类别,测点编号,测点实测值,项目类别,质量检查id,说明,时间戳) values ('$cdlb','$cdbh$i','$scz','$xmlb','$jzgcid','$nr','$zljcsjc')";

if ($conn->query($sql) === TRUE) {
    echo "保存成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();		
?>