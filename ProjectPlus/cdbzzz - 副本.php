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
    <!--拖曳的样式 t-->
    <link rel="stylesheet" type="text/css" href="../css/style3.css" />
    <!--拖曳的样式 t-->
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js/drag.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
   <style>
			html,body{height:100%;overflow:hidden;}
			body,div,h2{margin:0;padding:0;}
			body{font:12px/1.5 Tahoma;}
			.win{position:absolute;top:40%;left:33%;width:20px;height:20px;background:#fc0;cursor:move;}
			#win1{position:absolute;top:59%;left:59%;width:400px;height:33px;background:#fc0;cursor:move;}
	
	 </style>
	<script>
		window.onload = function ()
		{
		    var divs = document.getElementsByTagName('div');
//		    var divs = document.getElementsByClassName('win');
		    for(var i = 0, len = divs.length; i < len; i++){
		        var oWin = divs[i];
		        this.doYourSelf(oWin);
		    }
		};
		
		function doYourSelf(oWin){
		        // var oWin = document.getElementById("win");
		         var bDrag = false;
		         var disX = disY = 0;
		         oWin.onmousedown = function (event){  
		              bDrag = true;
		              disX = event.clientX - oWin.offsetLeft;
		              disY = event.clientY - oWin.offsetTop;  
		              return false
		         };
		         oWin.onmousemove = function (event){
		              if (!bDrag)
		               return;
		              var iL = event.clientX - disX;
		              var iT = event.clientY - disY;
		              
		              //°ÑÍ¼²ã·¶Î§¶¨ÔÚä¯ÀÀÆ÷´°¿ÚÄÚ
		              var maxL = document.documentElement.clientWidth - oWin.offsetWidth;
		              var maxT = document.documentElement.clientHeight - oWin.offsetHeight;  
		              iL = iL < 0 ? 0 : iL;
		              iL = iL > maxL ? maxL : iL;   
		              iT = iT < 0 ? 0 : iT;
		              iT = iT > maxT ? maxT : iT;
		              
		              oWin.style.marginTop = oWin.style.marginLeft = 0;
		              oWin.style.left = iL + "px";
		              oWin.style.top = iT + "px";  
		              return false
		         };
		         oWin.onmouseup = function (){
		              bDrag = false;    
		        };
		    }
	</script>
  </head>
  <body>
  		<!--<div>-->
		<?php
		  	require("../conn.php");
		  	$id=$_GET["id"];
			$sql = "select * from 测点布置附件表  where 项目类别='混凝土结构工程 'and 质量检查id='$id' ";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
				$cdfj = $row["测点附件"];
			}
			$conn->close();		
		?>
		
		<div id="mydiv" style="background-image: url('upload/<?php echo $cdfj;?>');width: 315px;height:420px;background-size: 100% 100%;">
			<?php
		  	require("../conn.php");
				$id=$_GET["id"]; 
				$sql = "select * from 实测实量新建测点  where 项目类别='混凝土结构工程 'and 质量检查id='$id' ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
			?>
				<div class="win btn-xs btn-default" onclick="cdaniu(this.id);" name="<?php echo $row["测点编号"];?>&<?php echo $id;?>" id="<?php echo $row["测点编号"];?>&<?php echo $id;?>"  data-toggle="tooltip" data-placement="right" title="<?php echo $row["测点类别"];?>,<?php echo $row["测点实测值"];?>" style="position:fixed;left:<?php echo $row["pageX"];?>;top:<?php echo $row["pageY"];?>;">
					<?php echo $row["测点编号"];?>
				</div>
			<?php
				}
				$conn->close();	
			 ?>
			</div>
		
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
		<script type="text/javascript">
	        $("#save3").click(function(){ 
			
						$.ajax({
				                cache: true,
				                type: "POST",
				                url:'xjcdbc.php',
				                data:$('#xjcdform').serialize(),// 你的formid
				                async: false,
				                error: function(request) {
				                    alert("Connection error");
				                },
				                success: function(data) {
				                    alert('保存成功');
				                }
				            });
				});
				var ceshikan=document.getElementsByClassName("win btn-xs btn-default");
				function cdaniu(cddida){
				for (var i=0;i<ceshikan.length;i++){
	//			document.getElementById("mydiv").onclick=function(ev){
				ceshikan[i].onclick=function(ev){
					var oEvent=ev||event;
					var oLeft=oEvent.clientX+'px';
					var oTop=oEvent.clientY+'px';
	//				alert(oLeft+','+oTop);
	//				alert(cddida);
					$.ajax({
							 url:'cdwzbc.php',
							data:{
								oLeft:oLeft,
								cddida:cddida,
								oTop:oTop
							},
							dataType:'json',
							type:'post',
							timeout:10000,
							success:function(data){
	//							alert(data);
							},
							error:function(xhr,type,errorThrown){
								//异常处理；
	//							alert('ajax错误'+type);
	//							return callback('ajax错误'+type+errorThrown);
//									alert ("保存成功");
									 location.reload();
							}
						});
				}}}
			</script>

  </body>
</html>