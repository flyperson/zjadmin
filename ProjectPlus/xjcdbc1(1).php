<?php
	require("../conn.php");
		$cdlb=$_POST["cdlb"];
		$cdbh=$_POST["cdbh"];
		$ggpj=$_POST["ggpj"];
		$xmlb=$_POST["xmlb"];
		$cdsl=$_POST["cdsl"];
		$jzgcid=$_POST["jzgcid"];
		$cdlx1=$_POST["cdlx1"];
		$cdlx2=$_POST["cdlx2"];
		$cdlx3=$_POST["cdlx3"];
		$scz=$_POST["scz"];
		$zljcsjc=$_POST["zljcsjc"];
//		$cdbh = "";
	if($cdlb=="坎台-工艺要求")
	{
	    $cdlx=$cdlx1;
	}elseif($cdlb=="观感质量")
	{  
		$cdlx=$cdlx2;
	}elseif($cdlb=="工艺要求")
	{  
		$cdlx=$cdlx1;
	}elseif($cdlb=="严重空鼓、开裂")
	{  
		$cdlx=$cdlx3;
	}
	elseif($cdlb=="材料要求及普遍渗漏")
	{  
		$cdlx=$cdlx3;
	}
	elseif($cdlb=="外墙铺贴")
	{  
		$cdlx=$cdlx1;
	}
	elseif($cdlb=="外墙涂料")
	{  
		$cdlx=$cdlx2;
	}
	elseif($cdlb=="外墙石材 ")
	{  
		$cdlx=$cdlx3;
	}
		elseif($cdlb=="入户门")
	{  
		$cdlx=$cdlx1;
	}
		elseif($cdlb=="铝合金、塑钢门、窗 ")
	{  
		$cdlx=$cdlx2;
	}
		elseif($cdlb=="工艺 ")
	{  
		$cdlx=$cdlx1;
	}	elseif($cdlb=="观感")
	{  
		$cdlx=$cdlx2;
	}
	}	elseif($cdlb=="天花")
	{  
		$cdlx=$cdlx1;
	}}	elseif($cdlb=="墙面")
	{  
		$cdlx=$cdlx2;
	}}	elseif($cdlb=="地面")
	{  
		$cdlx=$cdlx3;
	}
		else {
			$cdlx=$cdlx3;
		}
    if ($xmlb == "混凝土工程") {
		if ($cdlx == "一次成型") {
			$cdbh = "A";
		} elseif ($cdlx == "位置、尺寸") {
			$cdbh = "B";
		} elseif ($cdlx == "支模") {
			$cdbh = "C";
		} elseif ($cdlx == "砼坎台成型") {
			$cdbh = "D";
		} elseif ($cdlx == "砼柱、墙、板") {
			$cdbh = "E";
		} else {
			$cdbh = "F";
		} 
	} else if ($xmlb == "砌体工程") {
		if ($cdlx == "组砌") {
			$cdbh = "A";
		} elseif ($cdlx == "顶砖") {
			$cdbh = "B";
		} elseif ($cdlx == "留槎、拉结筋") {
			$cdbh = "C";
		} elseif ($cdlx == "二次构件及保护") {
			$cdbh = "D";
		} elseif ($cdlx == "门窗洞口、施工洞口") {
			$cdbh = "E";
		} elseif ($cdlx == "砌筑观感") {
			$cdbh = "F";
		} elseif ($cdlx == "二次构件") {
			$cdbh = "G";
		} else {
			
		} 
	} else if ($xmlb == "内墙抹灰工程") {
		if ($cdlx == "单户通长裂缝") {
			$cdbh = "A";
		} elseif ($cdlx == "单户空鼓") {
			$cdbh = "B";
		} elseif ($cdlx == "基底、拉毛") {
			$cdbh = "C";
		} elseif ($cdlx == "加强网") {
			$cdbh = "D";
		} elseif ($cdlx == "空鼓") {
			$cdbh = "E";
		} elseif ($cdlx == "开裂") {
			$cdbh = "F";
		} elseif ($cdlx == "面层、修补") {
			$cdbh = "G";
		} elseif ($cdlx == "细部外露、收口") {
			$cdbh = "H";
		} else {
			
		} 
	} else if ($xmlb == "外墙防水工程") {
		if ($cdlx == "材料") {
			$cdbh = "A";
		} elseif ($cdlx == "基底、拉毛、挂网") {
			$cdbh = "B";
		} elseif ($cdlx == "抹灰、防水、保温层") {
			$cdbh = "C";
		} elseif ($cdlx == "拦河、压顶、外墙线条") {
			$cdbh = "D";
		} elseif ($cdlx == "分格缝、滴水线") {
			$cdbh = "E";
		} elseif ($cdlx == "抹灰、防水、保温层") {
			$cdbh = "F";
		} elseif ($cdlx == "檐口、歇山") {
			$cdbh = "G";
		} elseif ($cdlx == "渗漏") {
			$cdbh = "H";
		} else {
			
		} 
	} else if ($xmlb == "门窗工程") {
		if ($cdlx == "洞口尺寸") {
			$cdbh = "A";
		} elseif ($cdlx == "固定") {
			$cdbh = "B";
		} elseif ($cdlx == "塞缝") {
			$cdbh = "C";
		} elseif ($cdlx == "成品保护") {
			$cdbh = "D";
		} elseif ($cdlx == "渗漏") {
			$cdbh = "E";
		} elseif ($cdlx == "窗边") {
			$cdbh = "F";
		} elseif ($cdlx == "打胶") {
			$cdbh = "G";
		} else {
			
		} 
	} else if ($xmlb == "卫生间、沉箱工程") {
		if ($cdlx == "材料") {
			$cdbh = "A";
		} elseif ($cdlx == "每户渗漏点") {
			$cdbh = "B";
		} elseif ($cdlx == "基底") {
			$cdbh = "C";
		} elseif ($cdlx == "防水") {
			$cdbh = "D";
		} elseif ($cdlx == "细部") {
			$cdbh = "E";
		} elseif ($cdlx == "同层排水") {
			$cdbh = "F";
		} elseif ($cdlx == "渗漏") {
			$cdbh = "G";
		} elseif ($cdlx == "空鼓开裂") {
			$cdbh = "H";
		} elseif ($cdlx == "降板处理") {
			$cdbh = "I";
		} else {
			
		} 
	} else if ($xmlb == "水电安装工程") {
		if ($cdlx == "套管") {
			$cdbh = "A";
		} elseif ($cdlx == "给排水") {
			$cdbh = "B";
		} elseif ($cdlx == "布管布线") {
			$cdbh = "C";
		} elseif ($cdlx == "空调洞") {
			$cdbh = "D";
		} elseif ($cdlx == "渗漏") {
			$cdbh = "F";
		} else {
			
		} 
	} else if ($xmlb == "屋面及楼地面工程") {
		if ($cdlx == "材料材料") {
			$cdbh = "A";
		} elseif ($cdlx == "材料屋面防水施工前每户渗漏处") {
			$cdbh = "B";
		} elseif ($cdlx == "变形缝") {
			$cdbh = "C";
		} elseif ($cdlx == "檐口") {
			$cdbh = "D";
		} elseif ($cdlx == "排水") {
			$cdbh = "E";
		} elseif ($cdlx == "防水") {
			$cdbh = "F";
		} elseif ($cdlx == "渗漏") {
			$cdbh = "G";
		} elseif ($cdlx == "空鼓开裂") {
			$cdbh = "H";
		} else {
			
		} 
	} else if ($xmlb == "外墙工程") {
		if ($cdlx == "图案") {
			$cdbh = "A";
		} elseif ($cdlx == "表面") {
			$cdbh = "B";
		} elseif ($cdlx == "收口") {
			$cdbh = "C";
		} elseif ($cdlx == "线条") {
			$cdbh = "D";
		} elseif ($cdlx == "基层") {
			$cdbh = "E";
		} elseif ($cdlx == "层数") {
			$cdbh = "F";
		} elseif ($cdlx == "安装") {
			$cdbh = "G";
		} elseif ($cdlx == "打胶") {
			$cdbh = "H";
		} else {
			
		} 
		} else if ($xmlb == "门窗工程") {
		if ($cdlx == "安装") {
			$cdbh = "A";
		} elseif ($cdlx == "门") {
			$cdbh = "B";
		} elseif ($cdlx == "五金件") {
			$cdbh = "C";
		} elseif ($cdlx == "保护膜") {
			$cdbh = "D";
		} elseif ($cdlx == "排水孔") {
			$cdbh = "E";
		} elseif ($cdlx == "打胶") {
			$cdbh = "F";
		} elseif ($cdlx == "门扇离地缝隙") {
			$cdbh = "G";
		} elseif ($cdlx == "安装平正") {
			$cdbh = "H";
		} else {
			
		} 
			} else if ($xmlb == "栏杆、扶手工程") {
		if ($cdlx == "铁艺") {
			$cdbh = "A";
		} elseif ($cdlx == "观感") {
			$cdbh = "B";
		} else {
			
		} 
			} else if ($xmlb == "电梯前室、首层大堂") {
		if ($cdlx == "工艺") {
			$cdbh = "A";
		} elseif ($cdlx == "观感") {
			$cdbh = "B";
		} else {
			
		} 
	} else {
		
	};
		for ($i=1;$i<=$cdsl;$i++){
$sql="INSERT INTO 观感评价新建测点 (测点类别,测点编号,观感评价,项目类别,质量检查id,测点类型,时间戳) values ('$cdlb','$cdbh$i','$ggpj','$xmlb','$jzgcid','$cdlx','$zljcsjc')";
if ($conn->query($sql) === TRUE) {
    echo "保存成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();		
?>