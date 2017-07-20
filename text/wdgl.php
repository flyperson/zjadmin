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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
  
  </head>

  <body>
  	<!-- 头部导航条 -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php
	   						require("../conn.php");
								$id=$_GET["yhid"];
	   						$sql = "select * from 用户信息   where id='$id'";
	   						$result = $conn->query($sql);
	   						while($row = $result->fetch_assoc()) {
   					?>
          <a class="navbar-brand" href="../index.php?yhzh=<?php echo $row["账号"];?>">中建二局三公司</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../index.php?yhzh=<?php echo $row["账号"];?>">实测实量</a></li>
            <li><a href="rzgl.php?yhid=<?php echo $row["id"];?>">日志管理</a></li>
            <li  class="active"><a href="wdgl.php?yhid=<?php echo $row["id"];?>">文档管理</a></li>
            <!--<li><a href="../seclect.php?yhid=<?php echo $row["id"];?>">综合查询</a></li>-->
            <li><a href="../system.php?yhid=<?php echo $row["id"];?>">系统管理</a></li>
            <?php
								}
								$conn->close();		
						 ?>
          </ul>
        </div>
      </div>
    </nav>
    <div id="container" class="container">
    	<div class="row">
    		<!--左侧导航菜单 -->						
				<!--左侧导航菜单 -->
    		<!-- 内容区域 -->
    		<div class="col-md-10">
    		<div id="xmdj" class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">文档管理</h3>
					</div>
					<div class="panel-body">
		      <div class="tab-content">
		      <div role="tabpanel" class="tab-pane fade in active" id="pcd">
						<form action="upload_file1.php" method="post" enctype="multipart/form-data">
							<div class="form-group col-md-12">
								<input type="file" name="file" id="file" class="col-md-4">
								<input type="text" class="hidden" name="sjc" id="sjc">
								<input type="text" class="hidden" name="wdlb" id="wdlb" value="tz">
								 <div class="col-md-3">		
								 <select class= "form-control col-md-4" name="wdlb1" id="wdlb1">
                   <option>图纸</option >
                   <option>项目资料</option >
                   <option>施工方案</option >
              	 </select>
              	 </div>	
								<input type="submit" name="submit" value="上传" class="col-md-1" >
							</div>	
						</form>
						  <div class="col-md-12 form-group">
						  	<label for="jcrq" class="col-sm-2 control-label">显示类别筛选：</label>
						    <div class="col-md-4">		
								 <select class= "form-control col-md-4" name="wdlb2" id="wdlb2">
								 	 <option>全部</option>
                   <option>图纸</option >
                   <option>项目资料</option >
                   <option>施工方案</option >
              	 </select>
              	</div>
              </div>		
						<form id="tpdxs">
							<!-- 图纸 -->
							<!--<div class="col-md-12">-->
							<?php
								  require("../conn.php");
									$sql = "select * from 文件附件  where 文档类别='tz' ";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc()) {
             ?>
              	<div class="form-group" >
              		<label for="jcrq" class="col-sm-1 control-label">图纸：</label>
              		<div class="col-md-5">
	              		<img  src="../zjejsgs/upload/upload/<?php echo $row["文件名称"];?>"  width="90" height="90"/>
	              		<!--<img  src="upload/<?php echo $row["文件名称"];?>" class="col-md-4"/>-->
									  <button class="btn" type="button" id="<?php echo $row["id"];?>" onclick="scdhs(this.id)">删除</button>
										<a href="../zjejsgs/upload/upload/<?php echo $row["文件名称"];?>"><?php echo $row["文件名称"];?></a>
									</div>	
								</div>
							<?php
								}
								$conn->close();	
						  ?>
						</form>  
						  <!--</div>-->
						<form id="xmzldxs">  
						  <!-- 项目资料 -->
							<!--<div class="col-md-12">-->
							<?php
								  require("../conn.php");
									$sql = "select * from 文件附件  where 文档类别='xmzl' ";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc()) {
             ?>
              	<div class="form-group" >
              		<label for="jcrq" class="col-sm-1 control-label">项目资料：</label>
              		<div class="col-md-5">
              			<button class="btn" id="<?php echo $row["id"];?>" onclick="scdhs(this.id)">删除</button>
	              		<img  src="../zjejsgs/upload/upload/wjjia.jpg" class="col-md-4"/>
										<a href="../zjejsgs/upload/upload/<?php echo $row["文件名称"];?>" ><?php echo $row["文件名称"];?></a>
									</div>	
								</div>
							<?php
								}
								$conn->close();	
						  ?>
						</form>    
						  <!--</div>-->
						<form id="sgfadxs">  
						  <!-- 施工方案 -->
              <!--<div class="col-md-12">-->
							<?php
								  require("../conn.php");
									$sql = "select * from 文件附件  where 文档类别='sgfa' ";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc()) {
             ?>
              	<div class="form-group">
              		<label for="jcrq" class="col-sm-1 control-label">施工方案：</label>
              		<div class="col-md-5">
              			<button class="btn" id="<?php echo $row["id"];?>" onclick="scdhs(this.id)">删除</button>
              			<img  src="../zjejsgs/upload/upload/wjjia.jpg" class="col-md-4"/>
										<a href="../zjejsgs/upload/upload/<?php echo $row["文件名称"];?>"><?php echo $row["文件名称"];?></a>
									</div>	
								</div>
							<?php
								}
								$conn->close();	
						  ?>
						  <!--</div>-->	
						</form>
					</div>	
     	  </div>
     	 </div>
    	</div><!-- 内容区域 -->
     </div>
    </div>
   </div>
  <footer class="bs-docs-footer" role="contentinfo"></footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
    
     $(document).ready(function() {
    	$("footer").load("../footer.html");
   		;
    });
    $('#table_gclb').bootstrapTable({		
		striped : true,	//会有隔行变色效果
		pagination : true,	//表格底部显示分页条
		pageSize : 10,	//页面数据条数
		search : true,	//搜索框
		showRefresh : true,	//刷新按钮
		showToggle : true,	//切换试图（table/card）按钮
		showPaginationSwitch : true,	//数据条数选择框
		showColumns : true,	//内容列下拉框
		toolbar : "#toolbar",	//指明自定义的菜单
		showExport : true	//导出按钮
		
	  });
	  $('#table_gclb1').bootstrapTable({		
		striped : true,	//会有隔行变色效果
		pagination : true,	//表格底部显示分页条
		pageSize : 10,	//页面数据条数
		search : true,	//搜索框
		showRefresh : true,	//刷新按钮
		showToggle : true,	//切换试图（table/card）按钮
		showPaginationSwitch : true,	//数据条数选择框
		showColumns : true,	//内容列下拉框
		toolbar : "#toolbar",	//指明自定义的菜单
		showExport : true	//导出按钮
		
	  });
		var sjc=document.getElementById("sjc");
		var myDate=new Date()
		var timeShijianchuo=myDate.getTime();
		sjc.value=timeShijianchuo;
		var wdlb1=document.getElementById('wdlb1');
		var wdlb=document.getElementById('wdlb');
		wdlb1.addEventListener('click',
				function(){
//					alert('123');
					if(wdlb1.value=='图纸'){
						wdlb.value = 'tz';
					}
					else if(wdlb1.value=='项目资料'){
						wdlb.value = 'xmzl';
					}
					else{
						wdlb.value = 'sgfa';
					}
		})
		var tpdxs=document.getElementById('tpdxs');
		var xmzldxs=document.getElementById('xmzldxs');
		var sgfadxs=document.getElementById('sgfadxs');
		var wdlb2=document.getElementById('wdlb2');
		wdlb2.addEventListener('click',function(){
			tpdxs.setAttribute("class", "hidden"); 
			xmzldxs.setAttribute("class", "hidden"); 
			sgfadxs.setAttribute("class", " hidden"); 
			if(wdlb2.value=='图纸'){
				tpdxs.setAttribute("class", ""); 
			}
			else if (wdlb2.value=='全部'){
				tpdxs.setAttribute("class", ""); 
				xmzldxs.setAttribute("class", ""); 
				sgfadxs.setAttribute("class", ""); 
			}
			else if(wdlb2.value=='项目资料'){
				xmzldxs.setAttribute("class", ""); 
			}
			else{
				sgfadxs.setAttribute("class", "");
		}});
		function scdhs(Aabb){
			var aabb = Aabb;
//			 if(window.confirm('你确定？')){
			$.ajax({
						 url:'wdsc.php',
						data:{
							aabb:aabb
						},
						dataType:'json',
						type:'post',
						timeout:10000,
						success:function(data){
//							alert(data);
//								location.replace(location.href);
						},
						error:function(xhr,type,errorThrown){
							//异常处理；
//							alert('ajax错误'+type);
                location.replace(location.href);
						}
					}); 	
		}
//		}
  </script>

  </body>
</html>

