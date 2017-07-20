<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>中建二局三公司</title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" type="text/css" href="../css/docs.css"/>
    <!-- Custom styles for this template -->
    <link href="../css/theme.css" rel="stylesheet">
    
    <!-- Custom styles for bootstrap-table -->
    <link href="../css/bootstrap-table.min.css" rel="stylesheet">
    <link href="../css/mycss.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>
		<script type="text/javascript" src="../js/jedate.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
  
  </head>
	<body>
		<div class="modal-header">
				<?php
           require("../conn.php");
		    $sjc1=$_GET["sjc1"];
		   $a = explode("/",$sjc1);
		   $sjc=$a[0];
		   $gcid1=$a[1];
		   $tzdbh1=$a[2];
           $sql = "select * from 通知单 where 时间戳='$sjc' and 工程id='$gcid1' and 通知单编号='$tzdbh1' ";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) { 
		?>
			<!--<div>
				<button  id="bbdy" type="button" class="btn btn-default col-sm-offset-3" onclick="window.open('llbb/wzfk.php?sjc1=<?php echo $sjc1;?>');window.close()">
					违章罚款报表打印
				</button>
				
			</div>-->
			<!--<div>
				<button id="bbdy" type="button" class="btn btn-default col-sm-offset-3" onclick="window.open('llbb/tgtz.php?sjc1=<?php echo $sjc1;?>');window.close()">停工通知报表打印</button>
			</div>-->
			<div>
				<!--<button id="bbdy" type="button" class="btn btn-default col-sm-offset-3" onclick="window.open('llbb/aqjczgjl.php?sjc1=<?php echo $sjc1;?>');window.close()">安全检查和整改记录报表打印</button>-->
				<!--<button id="bbdy" type="button" class="btn btn-default col-sm-offset-3" onclick="window.open('llbb/fgs.php?sjc1=<?php echo $sjc1;?>');window.close()">分公司</button>
			</div>-->
			<div>
				<button id="buttDY" type="button"  class="btn btn-default col-sm-offset-3" onclick="save1();window.close()" name="<?php echo $row["检查层级"].'/*/'.$sjc1;?>">报表打印预览</button></div>
				<div>
				<button id="bbdy" type="button" class="btn btn-default col-sm-offset-3" onclick="save2();window.close()" name="<?php echo $row["检查层级"].'/*/'.$sjc1;?>">导出word</button></div>
		    </div>
		   						<?php
											}
											$conn->close();
																						
										?>
		</div>
		<script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   <!--js of bootstrap-table -->
   <script src="../js/bootstrap-table.min.js"></script>
   <!--js of bootstrap-table—export -->
   <script src="../js/export/tableExport.js"></script>
   <script src="../js/export/bootstrap-table-export.js"></script>
   <script src="../js/bootstrap-table-zh-CN.min.js"></script>
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/mySidenav.js" type="text/javascript" charset="utf-8"></script>
   
    <script src="../js/ProjectPlus/aqxc.js"></script>
		<script type="text/javascript">
			function save1(){
				var buttDYid=document.getElementById("buttDY");
				var DYName=buttDYid.name;
				var DYValue=DYName.split("/*/");
//				alert(DYValue[0]);
//				alert(DYValue[1]);
				var x=DYValue[0].slice(0,1);
				switch(x)
   				 {
   				 	case "项":
   				 	window.open("llbb/xmbaq.php?sjc1="+DYValue[1]);
   				 	break;
   				 	case "分":
   				 	window.open("llbb/fgs.php?sjc1="+DYValue[1]);
   				 	break;
   				 	case "总":
   				 	window.open("llbb/zbxm.php?sjc1="+DYValue[1]);
   				 	break;
   				 	default:
   				 	alert("检查层级的开头并不是总部/分公司/项目部");
   				 }  	
			};
			function save2(){
				var buttWord=document.getElementById("bbdy");
				var WordName=buttWord.name;
				var WordValue=WordName.split("/*/");
//				alert(DYValue[0]);
//				alert(DYValue[1]);
				var x=WordValue[0].slice(0,1);
				switch(x)
   				 {
   				 	case "项":
   				 	window.open("llbb/xmbaqword.php?sjc1="+WordValue[1]);
   				 	break;
   				 	case "分":
   				 	window.open("llbb/fgsword.php?sjc1="+WordValue[1]);
   				 	break;
   				 	case "总":
   				 	window.open("llbb/zbxmword.php?sjc1="+WordValue[1]);
   				 	break;
   				 	default:
   				 	alert("检查层级的开头并不是总部/分公司/项目部");
   				 }  	
			};
		</script>
	</body>
</html>