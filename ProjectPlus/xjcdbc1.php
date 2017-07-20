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
		$cdlx4=$_POST["cdlx4"];
		$cdlx5=$_POST["cdlx5"];
		$cdlx6=$_POST["cdlx6"];
		$cdlx7=$_POST["cdlx7"];
		$scz=$_POST["scz"];
		$nr=$_POST["nr"];
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
	}elseif($cdlb=="材料要求及普遍渗漏")
	{  
		$cdlx=$cdlx3;
	}elseif($cdlb=="外墙铺贴")
	{  
		$cdlx=$cdlx1;
	}elseif($cdlb=="外墙涂料")
	{  
		$cdlx=$cdlx2;
	}elseif($cdlb=="外墙石材")
	{  
		$cdlx=$cdlx3;
	}elseif($cdlb=="有吊顶天花")
	{  
		$cdlx=$cdlx1;
	}elseif($cdlb=="无吊顶天花")
	{  
		$cdlx=$cdlx2;
	}elseif($cdlb=="线条")
	{  
		$cdlx=$cdlx3;
	}elseif($cdlb=="普遍开裂")
	{  
		$cdlx=$cdlx4;
	}elseif($cdlb=="普遍空鼓、开裂")
	{  
		$cdlx=$cdlx1;
	}elseif($cdlb=="涂料工程")
	{  
		$cdlx=$cdlx2;
	}elseif($cdlb=="裱糊工程")
	{  
		$cdlx=$cdlx3;
	}elseif($cdlb=="木饰面")
	{  
		$cdlx=$cdlx4;
	}elseif($cdlb=="软硬包")
	{  
		$cdlx=$cdlx5;
	}elseif($cdlb=="石材、瓷砖铺贴")
	{  
		$cdlx=$cdlx6;
	}elseif($cdlb=="玻璃、金属")
	{  
		$cdlx=$cdlx7;
	}elseif($cdlb=="地砖")
	{  
		$cdlx=$cdlx1;
	}elseif($cdlb=="木地板")
	{  
		$cdlx=$cdlx2;
	}elseif($cdlb=="石材")
	{  
		$cdlx=$cdlx3;
	}elseif($cdlb=="踢脚线")
	{  
		$cdlx=$cdlx4;
	}elseif($cdlb=="门槛石")
	{  
		$cdlx=$cdlx5;
	}elseif($cdlb=="橱柜")
	{  
		$cdlx=$cdlx1;
	}elseif($cdlb=="电器")
	{  
		$cdlx=$cdlx2;
	}elseif($cdlb=="给、排水")
	{  
		$cdlx=$cdlx3;
	}elseif($cdlb=="马桶、浴缸、尿斗")
	{  
		$cdlx=$cdlx1;
	}elseif($cdlb=="浴室镜、柜")
	{  
		$cdlx=$cdlx2;
	}elseif($cdlb=="淋浴屏风")
	{  
		$cdlx=$cdlx3;
	}elseif($cdlb=="地漏")
	{  
		$cdlx=$cdlx4;
	}elseif($cdlb=="龙头、花洒、五金件")
	{  
		$cdlx=$cdlx5;
	}elseif($cdlb=="给、排水")
	{  
		$cdlx=$cdlx6;
	}elseif($cdlb=="空调")
	{  
		$cdlx=$cdlx1;
	}elseif($cdlb=="电箱、排气扇、开关、插座")
	{  
		$cdlx=$cdlx2;
	}elseif($cdlb=="灯具")
	{  
		$cdlx=$cdlx3;
	}elseif($cdlb=="木门")
	{  
		$cdlx=$cdlx1;
	}elseif($cdlb=="铝合金、塑钢门、窗")
	{  
		$cdlx=$cdlx2;
	}elseif($cdlb=="工艺")
	{  
		$cdlx=$cdlx1;
	}elseif($cdlb=="观感")
	{  
		$cdlx=$cdlx2;
	}elseif($cdlb=="天花")
	{  
		$cdlx=$cdlx1;
	}elseif($cdlb=="墙面")
	{  
		$cdlx=$cdlx2;
	}elseif($cdlb=="地面")
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
		} elseif ($cdlx == "抹灰、防水、保温层工艺") {
			$cdbh = "C";
		} elseif ($cdlx == "拦河、压顶、外墙线条") {
			$cdbh = "D";
		} elseif ($cdlx == "分格缝、滴水线") {
			$cdbh = "E";
		} elseif ($cdlx == "抹灰、防水、保温层观感") {
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
		} elseif ($cdlb=="外墙铺贴"&&$cdlx == "表面") {
			$cdbh = "B";
		} elseif ($cdlx == "收口") {
			$cdbh = "C";
		} elseif ($cdlb=="外墙铺贴"&&$cdlx == "线条") {
			$cdbh = "D";
		} elseif ($cdlx == "基层") {
			$cdbh = "E";
		} elseif ($cdlx == "层数") {
			$cdbh = "F";
		} elseif ($cdlb=="外墙涂料"&&$cdlx == "表面") {
			$cdbh = "G";
		} elseif ($cdlb=="外墙涂料"&&$cdlx == "线条") {
			$cdbh = "H";
		} elseif ($cdlx == "安装") {
			$cdbh = "I";
		} elseif ($cdlb=="外墙石材"&&$cdlx == "表面") {
			$cdbh = "J";
		} elseif ($cdlb=="外墙石材"&&$cdlx == "线条") {
			$cdbh = "K";
		} elseif ($cdlx == "打胶") {
			$cdbh = "L";
		}else {
			
		} 
	}else if ($xmlb == "天花工程") {
		if ($cdlx == "普遍开裂") {
			$cdbh = "A";
		} elseif ($cdlb=="有吊顶天花"&&$cdlx == "安装") {
			$cdbh = "B";
		} elseif ($cdlb=="有吊顶天花"&&$cdlx == "表面") {
			$cdbh = "C";
		} elseif ($cdlb=="有吊顶天花"&&$cdlx == "油漆") {
			$cdbh = "D";
		} elseif ($cdlx == "基层") {
			$cdbh = "E";
		} elseif ($cdlb=="无吊顶天花"&&$cdlx == "表面") {
			$cdbh = "F";
		} elseif ($cdlb=="无吊顶天花"&&$cdlx == "油漆") {
			$cdbh = "G";
		} elseif ($cdlb=="线条"&&$cdlx == "安装") {
			$cdbh = "H";
		} elseif ($cdlx == "拼接") {
			$cdbh = "I";
		} elseif ($cdlb=="线条"&&$cdlx == "表面") {
			$cdbh = "J";
		} elseif ($cdlb=="线条"&&$cdlx == "油漆") {
			$cdbh = "K";
		} else {
			
		} 
	}else if ($xmlb == "墙面工程") {
		if ($cdlx == "单户通长裂缝") {
			$cdbh = "A";
		} elseif ($cdlx == "单户瓷砖空鼓") {
			$cdbh = "B";
		}elseif ($cdlb=="涂料工程"&&$cdlx == "基层") {
			$cdbh = "C";
		} elseif ($cdlb=="涂料工程"&&$cdlx == "层数") {
			$cdbh = "D";
		} elseif ($cdlb=="涂料工程"&&$cdlx == "表面") {
			$cdbh = "E";
		} elseif ($cdlx == "油漆") {
			$cdbh = "F";
		} elseif ($cdlb=="裱糊工程"&&$cdlx == "基层") {
			$cdbh = "G";
		} elseif ($cdlb=="裱糊工程"&&$cdlx == "预埋") {
			$cdbh = "H";
		} elseif ($cdlb=="裱糊工程"&&$cdlx == "表面") {
			$cdbh = "I";
		} elseif ($cdlx == "拼接") {
			$cdbh = "J";
		} elseif ($cdlb=="裱糊工程"&&$cdlx == "收口") {
			$cdbh = "K";
		} elseif ($cdlb=="木饰面"&&$cdlx == "基层") {
			$cdbh = "L";
		} elseif ($cdlb=="木饰面"&&$cdlx == "安装") {
			$cdbh = "M";
		} elseif ($cdlb=="木饰面"&&$cdlx == "表面") {
			$cdbh = "N";
		} elseif ($cdlb=="木饰面"&&$cdlx == "细部") {
			$cdbh = "O";
		} elseif ($cdlb=="软硬包"&&$cdlx == "基层") {
			$cdbh = "P";
		} elseif ($cdlb=="软硬包"&&$cdlx == "安装") {
			$cdbh = "Q";
		} elseif ($cdlb=="软硬包"&&$cdlx == "表面") {
			$cdbh = "R";
		} elseif ($cdlb=="软硬包"&&$cdlx == "细部") {
			$cdbh = "S";
		} elseif ($cdlb=="石材、瓷砖铺贴"&&$cdlx == "放样") {
			$cdbh = "T";
		} elseif ($cdlb=="石材、瓷砖铺贴"&&$cdlx == "挂石") {
			$cdbh = "U";
		} elseif ($cdlb=="石材、瓷砖铺贴"&&$cdlx == "排版") {
			$cdbh = "V";
		} elseif ($cdlb=="石材、瓷砖铺贴"&&$cdlx == "表面") {
			$cdbh = "W";
		} elseif ($cdlb=="石材、瓷砖铺贴"&&$cdlx == "收口") {
			$cdbh = "X";
		} elseif ($cdlb=="玻璃、金属"&&$cdlx == "安装") {
			$cdbh = "Y";
		} elseif ($cdlb=="玻璃、金属"&&$cdlx == "表面") {
			$cdbh = "Z";
		} elseif ($cdlb=="玻璃、金属"&&$cdlx == "打胶") {
			$cdbh = "$";
		}else {
			
		} 
	}else if ($xmlb == "地面工程") {
		if ($cdlb=="地砖"&&$cdlx == "放样") {
			$cdbh = "A";
		} elseif ($cdlb=="地砖"&&$cdlx == "细部") {
			$cdbh = "B";
		} elseif ($cdlb=="地砖"&&$cdlx == "厨房地柜底部") {
			$cdbh = "C";
		} elseif ($cdlb=="地砖"&&$cdlx == "排版") {
			$cdbh = "D";
		} elseif ($cdlb=="地砖"&&$cdlx == "表面") {
			$cdbh = "E";
		} elseif ($cdlb=="地砖"&&$cdlx == "收口") {
			$cdbh = "F";
		} elseif ($cdlb=="木地板"&&$cdlx == "细部") {
			$cdbh = "G";
		} elseif ($cdlb=="木地板"&&$cdlx == "排版") {
			$cdbh = "H";
		} elseif ($cdlb=="木地板"&&$cdlx == "表面") {
			$cdbh = "I";
		} elseif ($cdlb=="石材"&&$cdlx == "放样") {
			$cdbh = "J";
		} elseif ($cdlb=="石材"&&$cdlx == "细部") {
			$cdbh = "K";
		} elseif ($cdlb=="石材"&&$cdlx == "排版") {
			$cdbh = "L";
		} elseif ($cdlb=="石材"&&$cdlx == "表面") {
			$cdbh = "M";
		} elseif ($cdlb=="石材"&&$cdlx == "收口") {
			$cdbh = "N";
		} elseif ($cdlb=="踢脚线"&&$cdlx == "安装") {
			$cdbh = "O";
		} elseif ($cdlb=="踢脚线"&&$cdlx == "表面") {
			$cdbh = "P";
		} elseif ($cdlb=="踢脚线"&&$cdlx == "细部") {
			$cdbh = "Q";
		} elseif ($cdlb=="踢脚线"&&$cdlx == "打胶") {
			$cdbh = "R";
		} elseif ($cdlb=="门槛石"&&$cdlx == "铺贴") {
			$cdbh = "S";
		} elseif ($cdlb=="门槛石"&&$cdlx == "标高") {
			$cdbh = "T";
		} elseif ($cdlb=="门槛石"&&$cdlx == "表面") {
			$cdbh = "U";
		}else {
			
		} 
	}else if ($xmlb == "厨房") {
		if ($cdlb=="橱柜"&&$cdlx == "背板") {
			$cdbh = "A";
		} elseif ($cdlb=="橱柜"&&$cdlx == "安装") {
			$cdbh = "B";
		} elseif ($cdlb=="橱柜"&&$cdlx == "表面") {
			$cdbh = "C";
		} elseif ($cdlb=="橱柜"&&$cdlx == "合面") {
			$cdbh = "D";
		} elseif ($cdlb=="橱柜"&&$cdlx == "间距") {
			$cdbh = "E";
		} elseif ($cdlb=="橱柜"&&$cdlx == "细部") {
			$cdbh = "F";
		} elseif ($cdlb=="电器"&&$cdlx == "安装") {
			$cdbh = "G";
		} elseif ($cdlb=="电器"&&$cdlx == "嵌入式电器") {
			$cdbh = "H";
		} elseif ($cdlb=="电器"&&$cdlx == "嵌入式灶台") {
			$cdbh = "I";
		} elseif ($cdlb=="电器"&&$cdlx == "抽油烟机") {
			$cdbh = "J";
		} elseif ($cdlb=="电器"&&$cdlx == "嵌入式冰箱") {
			$cdbh = "K";
		} elseif ($cdlb=="给、排水"&&$cdlx == "给、排水管") {
			$cdbh = "L";
		} elseif ($cdlb=="给、排水"&&$cdlx == "龙头") {
			$cdbh = "M";
		} elseif ($cdlb=="给、排水"&&$cdlx == "洗菜盆") {
			$cdbh = "N";
		} else {
			
		} 
	}else if ($xmlb == "卫生间、阳露台") {
		if ($cdlb=="马桶、浴缸、尿斗"&&$cdlx == "给、排水管") {
			$cdbh = "A";
		} elseif ($cdlb=="马桶、浴缸、尿斗"&&$cdlx == "马桶") {
			$cdbh = "B";
		} elseif ($cdlb=="马桶、浴缸、尿斗"&&$cdlx == "嵌入式浴缸") {
			$cdbh = "C";
		} elseif ($cdlb=="马桶、浴缸、尿斗"&&$cdlx == "尿斗") {
			$cdbh = "D";
		} elseif ($cdlb=="浴室镜、柜"&&$cdlx == "背板") {
			$cdbh = "E";
		} elseif ($cdlb=="浴室镜、柜"&&$cdlx == "安装") {
			$cdbh = "F";
		} elseif ($cdlb=="浴室镜、柜"&&$cdlx == "表面") {
			$cdbh = "G";
		} elseif ($cdlb=="浴室镜、柜"&&$cdlx == "收口") {
			$cdbh = "H";
		} elseif ($cdlb=="浴室镜、柜"&&$$cdlx == "柜体") {
			$cdbh = "I";
		} elseif ($cdlb=="浴室镜、柜"&&$cdlx == "五金") {
			$cdbh = "J";
		} elseif ($cdlb=="浴室镜、柜"&&$cdlx == "水件") {
			$cdbh = "K";
		} elseif ($cdlb=="淋浴屏风"&&$cdlx == "安装") {
			$cdbh = "L";
		} elseif ($cdlb=="淋浴屏风"&&$cdlx == "表面") {
			$cdbh = "M";
		} elseif ($cdlb=="淋浴屏风"&&$cdlx == "打胶") {
			$cdbh = "N";
		} elseif ($cdlb=="淋浴屏风"&&$cdlx == "五金件") {
			$cdbh = "O";
		} elseif ($cdlb=="地洞"&&$cdlx == "标高") {
			$cdbh = "P";
		} elseif ($cdlb=="地洞"&&$cdlx == "水封") {
			$cdbh = "Q";
		} elseif ($cdlb=="地洞"&&$cdlx == "细部") {
			$cdbh = "R";
		} elseif ($cdlb=="龙头、花洒、五金件"&&$cdlx == "安装") {
			$cdbh = "S";
		} elseif ($cdlb=="龙头、花洒、五金件"&&$cdlx == "细部") {
			$cdbh = "T";
		} elseif ($cdlb=="给、排水"&&$cdlx == "坡度、水封") {
			$cdbh = "U";
		} elseif ($cdlb=="给、排水"&&$cdlx == "固定") {
			$cdbh = "V";
		} elseif ($cdlb=="给、排水"&&$cdlx == "细部") {
			$cdbh = "W";
		}else {
			
		} 
	}else if ($xmlb == "电气工程") {
		if ($cdlx == "孔洞") {
			$cdbh = "A";
		} elseif ($cdlx == "中央空调") {
			$cdbh = "B";
		} elseif ($cdlx == "分立式空调") {
			$cdbh = "C";
		} elseif ($cdlx == "箱内") {
			$cdbh = "D";
		}elseif ($cdlx == "配电箱、排气扇") {
			$cdbh = "E";
		} elseif ($cdlx == "开关、插座") {
			$cdbh = "F";
		} elseif ($cdlx == "高度") {
			$cdbh = "G";
		} elseif ($cdlx == "灯具") {
			$cdbh = "H";
		}  else {
			
		} 
	}else if ($xmlb == "门窗细部工程") {
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
		}  elseif ($cdlx == "安装平正") {
			$cdbh = "H";
		} else {
			
		} 
	}else if ($xmlb == "栏杆、楼梯扶手") {
		if ($cdlx == "铁艺") {
			$cdbh = "A";
		} elseif ($cdlx == "观感") {
			$cdbh = "B";
		}  else {
			
		} 
	}else if ($xmlb == "电梯前室、首层大堂") {
		if ($cdlb=="天花"&&$cdlx == "工艺") {
			$cdbh = "A";
		} elseif ($cdlb=="天花"&&$cdlx == "观感") {
			$cdbh = "B";
		} elseif ($cdlb=="墙面"&&$cdlx == "工艺") {
			$cdbh = "C";
		} elseif ($cdlb=="墙面"&&$cdlx == "观感") {
			$cdbh = "D";
		} elseif ($cdlb=="地面"&&$cdlx == "工艺") {
			$cdbh = "E";
		} elseif ($cdlb=="地面"&&$cdlx == "观感") {
			$cdbh = "F";
		}  else {
			
		} 
	}
	else {
		
	};
$sql1="select * from 观感评价新建测点 where 项目类别='".$xmlb."' and 质量检查id='".$jzgcid."' and 测点编号 like '%".$cdbh."%' ";
$result = $conn -> query($sql1);
$count = mysqli_num_rows($result);
//echo $count;
		for ($i=$count+1;$i<=$cdsl+$count;$i++){
$sql="INSERT INTO 观感评价新建测点 (测点类别,测点编号,观感评价,项目类别,质量检查id,测点类型,时间戳,说明) values ('$cdlb','$cdbh$i','$ggpj','$xmlb','$jzgcid','$cdlx','$zljcsjc','$nr')";
if ($conn->query($sql) === TRUE) {
    echo "保存成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();		
?>