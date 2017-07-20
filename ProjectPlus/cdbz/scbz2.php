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
    
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" type="text/css" href="../../css/docs.css"/>
    <!-- Custom styles for this template -->
    <link href="../../css/theme.css" rel="stylesheet">
    
    <!-- Custom styles for bootstrap-table -->
    <link href="../../css/bootstrap-table.min.css" rel="stylesheet">
    <link href="../../css/mycss.css" rel="stylesheet">
    <!--拖曳的样式 t-->
    <link rel="stylesheet" type="text/css" href="../../css/style3.css" />
    <!--拖曳的样式 t-->
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../js/ie-emulation-modes-warning.js"></script>
    <script src="../../js/jquery-1.10.2.min.js"></script>
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
			.win{position:absolute;top:40%;left:33%;width:30px;height:20px;background:#fc0;cursor:move;}
			#win1{position:absolute;top:59%;left:59%;width:400px;height:33px;background:#fc0;cursor:move;}
	
	 </style>
	<script>
		window.onload = function ()
		{
//		    var divs = document.getElementsByTagName('div');
		    var divs = document.getElementsByClassName('win');
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
  	<!--<div class="row">-->
		<?php
		  	require("../../conn.php");
		  	$id=$_GET["id"];
		  	$xmlb=$_GET["xmlb"];
				$sql = "select * from 测点布置附件表  where 项目类别='$xmlb'and 质量检查id='$id'";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					$cdfj = $row["测点附件"];
				}
				$conn->close();		
		?>
		
		<div id="mydiv" style="background-image: url('../../zjejsgs/upload/<?php echo $cdfj;?>');width: 315px;height:420px;background-size: 100% 100%;">
			<?php
		  	require("../../conn.php");
		  	error_reporting(E_ALL ^ E_NOTICE);
				$id=$_GET["id"]; 
				$xmlb=$_GET["xmlb"];
				$sclb=$_GET["sclb"];
				$sxlba =$_POST['sxlba'];
//				echo $sclb;
				if($sclb=='观感评价'){
				$sql = "select * from 观感评价新建测点  where 项目类别='$xmlb'and 质量检查id='$id' ";
				}
				else {
					if($sxlba=='全部' or $sxlba==''){
						$sql = "select * from 实测实量新建测点  where 项目类别='$xmlb'and 质量检查id='$id'";
					}
					else{
						$sql = "select * from 实测实量新建测点  where 项目类别='$xmlb'and 质量检查id='$id'  and 测点类别  LIKE '%$sxlba%' ";
					}
				};
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					$cdlbaa=$row["测点类别"];
					if($row["pageX"]=='' or $row["pageY"]==''){
						
						$xzzb='0px';$yzzb='440px';
					}
					else {
						$xzzb = $row["pageX"];
					  $yzzb = $row["pageY"];
					}
			if($cdlbaa=='墙面表面平整度' ){
			?>
				<div class="win btn-xs btn-default" onclick="cdaniu(this.id);" name="<?php echo $row["测点编号"];?>&<?php echo $id;?>" id="<?php echo $row["测点编号"];?>&<?php echo $id;?>"  data-toggle="tooltip" data-placement="right" title="<?php echo $row["测点类别"];?>,<?php echo $row["测点实测值"];?>" style="position:fixed;left:<?php echo $xzzb;?>;top:<?php echo $yzzb;?>;background:yellow;">
					<?php echo $row["测点编号"];?>
				</div>
				<?php }?>
				<?php
					if($cdlbaa=='墙面垂直度'){
			?>
				<div class="win btn-xs btn-default " onclick="cdaniu(this.id);" name="<?php echo $row["测点编号"];?>&<?php echo $id;?>" id="<?php echo $row["测点编号"];?>&<?php echo $id;?>"  data-toggle="tooltip" data-placement="right" title="<?php echo $row["测点类别"];?>,<?php echo $row["测点实测值"];?>" style="position:fixed;left:<?php echo $xzzb;?>;top:<?php echo $yzzb;?>;background:blue;">
					<?php echo $row["测点编号"];?>
				</div>
				<?php }?>	
					<?php
						if($cdlbaa=="阴阳角方正" ){
							?>
							<div class="win btn-xs btn-default " onclick="cdaniu(this.id);" name="<?php echo $row["测点编号"];?>&<?php echo $id;?>" id="<?php echo $row["测点编号"];?>&<?php echo $id;?>"  data-toggle="tooltip" data-placement="right" title="<?php echo $row["测点类别"];?>,<?php echo $row["测点实测值"];?>" style="position:fixed;left:<?php echo $xzzb;?>;top:<?php echo $yzzb;?>;background:#F0FFFF;">
					<?php echo $row["测点编号"];?>
				</div>
						<?php } ?>
							<?php
						if($cdlbaa=="方正性" ){
							?>
							<div class="win btn-xs btn-default " onclick="cdaniu(this.id);" name="<?php echo $row["测点编号"];?>&<?php echo $id;?>" id="<?php echo $row["测点编号"];?>&<?php echo $id;?>"  data-toggle="tooltip" data-placement="right" title="<?php echo $row["测点类别"];?>,<?php echo $row["测点实测值"];?>" style="position:fixed;left:<?php echo $xzzb;?>;top:<?php echo $yzzb;?>;background:red;">
					<?php echo $row["测点编号"];?>
				</div>
						<?php } ?>
							<?php
						if($cdlbaa=="地面表面平整度(1)" ||$cdlbaa=="地面表面平整度(2)"){
							?>
							<div class="win btn-xs btn-default " onclick="cdaniu(this.id);" name="<?php echo $row["测点编号"];?>&<?php echo $id;?>" id="<?php echo $row["测点编号"];?>&<?php echo $id;?>"  data-toggle="tooltip" data-placement="right" title="<?php echo $row["测点类别"];?>,<?php echo $row["测点实测值"];?>" style="position:fixed;left:<?php echo $xzzb;?>;top:<?php echo $yzzb;?>;background:green;">
					<?php echo $row["测点编号"];?>
				</div>
						<?php } ?>
							<?php
						if($cdlbaa=="门洞尺寸偏差(1)" ||$cdlbaa=="门洞尺寸偏差(2)" ||$cdlbaa=="门洞尺寸偏差(3)"){
							?>
							<div class="win btn-xs btn-default " onclick="cdaniu(this.id);" name="<?php echo $row["测点编号"];?>&<?php echo $id;?>" id="<?php echo $row["测点编号"];?>&<?php echo $id;?>"  data-toggle="tooltip" data-placement="right" title="<?php echo $row["测点类别"];?>,<?php echo $row["测点实测值"];?>" style="position:fixed;left:<?php echo $xzzb;?>;top:<?php echo $yzzb;?>;background:green;">
					<?php echo $row["测点编号"];?>
				</div>
						<?php } ?>
							<?php
						if($cdlbaa=="外窗内侧墙体厚度极差" ){
							?>
							<div class="win btn-xs btn-default " onclick="cdaniu(this.id);" name="<?php echo $row["测点编号"];?>&<?php echo $id;?>" id="<?php echo $row["测点编号"];?>&<?php echo $id;?>"  data-toggle="tooltip" data-placement="right" title="<?php echo $row["测点类别"];?>,<?php echo $row["测点实测值"];?>" style="position:fixed;left:<?php echo $xzzb;?>;top:<?php echo $yzzb;?>;background:GREY;">
					<?php echo $row["测点编号"];?>
				</div>
						<?php } ?>
							<?php
						if($cdlbaa=="厨卫间开间/进深偏差" ){
							?>
							<div class="win btn-xs btn-default " onclick="cdaniu(this.id);" name="<?php echo $row["测点编号"];?>&<?php echo $id;?>" id="<?php echo $row["测点编号"];?>&<?php echo $id;?>"  data-toggle="tooltip" data-placement="right" title="<?php echo $row["测点类别"];?>,<?php echo $row["测点实测值"];?>" style="position:fixed;left:<?php echo $xzzb;?>;top:<?php echo $yzzb;?>;background:GREEN;">
					<?php echo $row["测点编号"];?>
				</div>
						<?php } ?>
				<!--<input type="text" class="form-control " id="sclb" name="sclb" value="<?php echo $row["实测类别"];?>" >-->	
				<!--<input type="text" class="form-control " id="xmlb" name="xmlb" value="<?php echo $row["项目类别"];?>" >-->	
				
			<?php
				}
				$conn->close();	
			 ?>
			 
		  <input class="hidden" id="xmlb" value="<?php echo $xmlb;?>"/>
		  <input class="hidden" id="sclb" value="<?php echo $sclb;?>"/>
			</div>
			<div style="position:fixed;left:350px;top:0px">
				<div class="row col-md-12">
					<!--<input type="submit" class="btn" value="全部" />-->
					<form method="post" class="form-horizontal col-md-1">
						<input type="text" id="sxlba" name="sxlba" class="hidden" value="全部" />
						<button type="submit"  class="btn">全部</button>
					</form>		
					<form method="post" class="form-horizontal col-md-3">	
						<input type="text" id="sxlba1" name="sxlba" class="hidden" value="墙面表面平整度" />
						<button type="submit"  class="btn btn-warning">墙面表面平整度</button>	
					</form>		
					<form method="post" class="form-horizontal col-md-2">
						<input type="text" id="sxlba2" name="sxlba" class="hidden" value="墙面垂直度" />	
						<button type="submit"  class="btn btn-primary">墙面垂直度</button>	
					</form>	
					<form method="post" class="form-horizontal col-md-2">	
						<input type="text" id="sxlba3" name="sxlba" class="hidden" value="阴阳角方正" />	
						<button type="submit"  class="btn btn-info">阴阳角方正</button>
					</form>	
					<form method="post" class="form-horizontal col-md-2">	
						<input type="text" id="sxlba4" name="sxlba" class="hidden" value="方正性" />	
						<button type="submit"  class="btn btn-danger">方正性</button>
					</form>	
					<form method="post" class="form-horizontal col-md-2">		
						<input type="text" id="sxlba5" name="sxlba" class="hidden" value="地面表面平整度" />
						<button type="submit"  class="btn btn-success">地面表面平整度</button>
					</form>		
						<form method="post" class="form-horizontal col-md-2">		
						<input type="text" id="sxlba5" name="sxlba" class="hidden" value="门洞尺寸偏差" />
						<button type="submit"  class="btn btn-success">门洞尺寸偏差</button>
					</form>		
					<form method="post" class="form-horizontal col-md-3">		
						<input type="text" id="sxlba5" name="sxlba" class="hidden" value="外窗内侧墙体厚度极差" />
						<button type="submit"  class="btn btn-default">外窗内侧墙体厚度极差</button>
					</form>		
					<form method="post" class="form-horizontal col-md-3">		
						<input type="text" id="sxlba5" name="sxlba" class="hidden" value="厨卫间开间/进深偏差" />
						<button type="submit"  class="btn btn-success">厨卫间开间/进深偏差</button>
					</form>		
				</div>
				<div class="col-md-12"  style="height:400px;overflow:auto;">
					<?php
	           require("../../conn.php");
			   		 error_reporting(E_ALL ^ E_NOTICE);  
	   				 $zljcid=$_GET["id"];
					   
//					   $sxlba1 =$_POST['sxlba1'];
//					   $sxlba2 =$_POST['sxlba2'];
//					   $sxlba3 =$_POST['sxlba3'];
////					   $sxlba4 =$_POST['sxlba4'];
////					   $sxlba5 =$_POST['sxlba5'];
////					   echo $sxlba;
						 if ($sxlba=='全部' or $sxlba==''){
					   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='抹灰工程' ";
						 }
						 else {
						 	$sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='抹灰工程' and 测点类别  LIKE '%$sxlba%' ";
						 }
					   $result = $conn->query($sql);
	           while($row = $result->fetch_assoc()) {
	        ?>
            <div class="form-group" id="ceshiyong">
								<label for="scz" class="col-sm-4 control-label">测点类别：</label>
								<label for="cdsl" class="col-sm-4 control-label">测点编号：</label>
								<label for="cdsl" class="col-sm-4 control-label">测点实测值：</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="scz" name="scz" value="<?php echo $row["测点类别"];?>" >
								</div>
								<div class="col-sm-4">
										<input type="text" class="form-control" id="cdsl" name="cdsl" value="<?php echo $row["测点编号"];?>" >
								</div>
								<div class="col-sm-4" id="ceshila">
										<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl1" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
								</div>
						</div>
          <?php
						}
						$conn->close();					
					?>
				</div>
			</div>
			<input class="hidden" id="zljcid" value="<?php echo $zljcid;?>" />
			<button onclick="qkcd();">清空测点</button>
		  </div>
   <script src="../../js/bootstrap.min.js"></script>
   <!--js of bootstrap-table -->
   <script src="../../js/bootstrap-table.min.js"></script>
   <!--js of bootstrap-table—export -->
   <script src="../../js/export/tableExport.js"></script>
   <script src="../../js/export/bootstrap-table-export.js"></script>
   <script src="../../js/bootstrap-table-zh-CN.min.js"></script>
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../../js/mySidenav.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
				var ceshikan=document.getElementsByClassName("win btn-xs btn-default");
				function cdaniu(cddida){
				for (var i=0;i<ceshikan.length;i++){
	//			document.getElementById("mydiv").onclick=function(ev){
				ceshikan[i].onclick=function(ev){
					var oEvent=ev||event;
					var oLeft=oEvent.clientX+'px';
					var oTop=oEvent.clientY+'px';
					var xmlb = document.getElementById('xmlb').value;
					var sclb = document.getElementById('sclb').value;
	//				alert(oLeft+','+oTop);
	//				alert(cddida);
					$.ajax({
							 url:'cdwzbc.php',
							data:{
								oLeft:oLeft,
								cddida:cddida,
								oTop:oTop,
								xmlb:xmlb,
								sclb:sclb
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
				function qkcd(){
					var zljcid = document.getElementById('zljcid').value;
					var xmlb = document.getElementById('xmlb').value;
					var sclb = document.getElementById('sclb').value;
//			  	alert(zljcid);
						$.ajax({
							 url:'cdwzbc1.php',
							data:{
								zljcid:zljcid,
								xmlb:xmlb,
								sclb:sclb
							},
							dataType:'json',
							type:'post',
							timeout:10000,
							success:function(data){
	//							alert(data);
							},
							error:function(xhr,type,errorThrown){
									 location.reload();
							}
						});
			  }
			</script>

  </body>
</html>