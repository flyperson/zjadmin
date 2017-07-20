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
		 <style type="text/css">
			#code{margin-top:30px;
			margin-left:300px}
		</style>
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
					$yhid=$_GET["yhid"];
				$sql = "select * from 用户信息   where id='$yhid'";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
   			?>
          <a class="navbar-brand" href="../index.php?yhzh=<?php echo $row["账号"];?>">中建二局三公司</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" =<?php echo $row["账号"];?>">实测实量</a></li>
            <li><a href="../text/rzgl.php?yhid=<?php echo $row["id"];?>">日志管理</a></li>
            <li><a href="../text/wdgl.php?yhid=<?php echo $row["id"];?>">文档管理</a></li>
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
			<?php
			  $id=$_GET["id"];
			  require("../conn.php");
				$sql = "select * from 我的工程 where id='$id' ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
            ?>
    		<!--左侧导航菜单 -->
    		<div class="col-md-2">
    			<div class="bs-docs-sidebar affix" role="complementary">
    				<ul class="nav bs-docs-sidenav">
    					<li>
    						<a href="Project_in.php?id=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>">项目登记</a>
    					</li>    					
    					<li class="active">
    						<a href="zljcym.php?id=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>">质量检查</a>
    					</li>  
    					<li>
    						<a href="xczg.php?id=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>">质安巡检</a>
    					</li>  
    				</ul>
    			</div>    			
    		</div><!--左侧导航菜单 -->
    		
    		<!-- 内容区域 -->
    		<div class="col-md-10">
    			<div id="xmdj" class="panel panel-info">
						<div class="panel-heading">

							<h3 class="panel-title">质量检查-<?php echo $row["工程名称"];?></h3>
							<?php
								}
								$conn->close();							
							?>
							
						</div>
						<div class="panel-body">
							
		
    <!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="pcd">
				<p></p>
				<form class="form-horizontal" role="form">
			<div class="panel-body">
    					<!-- 表格自定义按钮 -->
    					<div id="toolbar1" class="btn-group">
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal5" >
								<i class="glyphicon glyphicon-plus"> 新建</i>
							</button>
    				
    					</div>
    					<table id="table_gclb">
    						<thead>
    							<tr>
								  <th>标题名称</th>
								  <th>检查单位</th>
							      <th>检查日期</th>
							      <th>检查人员</th>
							      <th>操作</th>
							    </thead>
    						<tbody>
    			<?php
                   require("../conn.php");
                   $yhid=$_GET["yhid"];
                   $sql = "select * from 质量检查 where 工程id='$id'";
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                        					
                   ?>
                   <tr class="">                   
                   <td><?php echo $row["标题名称"];?></a></td>
                   <td><?php echo $row["检查部位"];?></a></td>
                   <td><?php echo $row["检查日期"];?></a></td>
                   <td><?php echo $row["检查人员"];?></a></td>
                   <td><a href="scsl.php?gcid=<?php echo $row["工程id"];?>&zljcid=<?php echo $row["id"];?>&yhid=<?php echo $yhid=$_GET["yhid"]; ?>&sjc=<?php echo $row["时间戳"]; ?>">详情查看</a></td>

                   <?php
						}
						$conn->close();											
					?>
								      
    						</tbody>
    					</table>
    				</div>
				</form>
			</div>
			
		
		
				
				
		<!-- 模态框（Modal） -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<!--<form id="aqxcform" name="aqxcform" action="aqxcbc.php" method="post">-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">
										基本信息新建填写
									</h4>
								</div>
						<div class="modal-body">
							<form id="gcbcform" name="gcbcform" method="post" class="form-horizontal" role="form" >
								<div class="form-group ">
									<label for="btmc" class="col-sm-3 control-label">标题名称：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" id="btmc" name="btmc" value="" >						
									</div>
										<label for="jcdw" class="col-sm-3 control-label">检查单位：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" id="jcdw" name="jcdw" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="jcrq" class="col-sm-3 control-label">检查日期：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" id="jcrq" name="jcrq" placeholder="" >
									</div>
									<label for="jcry" class="col-sm-3 control-label">检查人员：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" id="jcry" name="jcry" placeholder="" >
									</div>
								</div>	
									<div class="form-group">
										<label for="sgbz" class="col-sm-3 control-label">施工班组：</label>
										<div class="col-sm-3">
											<input type="text" class="form-control" id="sgbz" name="sgbz" value="" placeholder="施工班组">
										</div>
										<label for="zzxm" class="col-sm-3 control-label">组长姓名：</label>
										<div class="col-sm-3">
											<input type="text" class="form-control" id="zzxm" name="zzxm" value="" placeholder="组长姓名">
										</div>
									</div>
									<div class="form-group">
										<label for="lxfs" class="col-sm-3 control-label">联系方式：</label>
										<div class="col-sm-3">
											<input type="text" class="form-control" id="lxfs" name="lxfs" value="" placeholder="联系方式">
										</div>
										<label for="sgrq" class="col-sm-3 control-label">施工日期：</label>
										<div class="col-sm-3">
											<input type="text" class="form-control" id="sgrq" name="sgrq" value="" placeholder="施工日期">
										</div>
									</div>
									<div class="form-group">
											<label for="gzms" class="col-sm-3 control-label">工作描述：</label>
											<div class="col-sm-7">
												<textarea class="form-control" rows="5" id="gzms" value="" name="gzms"></textarea>
											</div>
									</div>
									<div>
									<?php
			       						require("../conn.php");
												 $id=$_GET["id"];
												 
			       						$sql = "select * from 我的工程 where  id='$id'";
			       						$result = $conn->query($sql);
			       						while($row = $result->fetch_assoc()) {
			            					
			   						?>
										<input type="text" class="form-control hidden" id="gcid" name="gcid" value="<?php echo $row["id"];?>">	
										<input type="text" class="form-control hidden" id="gcmc" name="gcmc" value="<?php echo $row["工程名称"];?>">	
											<?php
												}
												$conn->close();		
											?>				
									</div>
								<div class="form-group hidden">
	                <label for="sjc" class="control-label col-lg-2">时间戳：</label>
	                <div class="col-lg-6">
	                   <input id="sjc" name="sjc" class="form-control"  size="16" type="text" value="" />
	                </div>
					      </div>
								<div class="modal-footer" >
												<button type="button" class="btn btn-default " data-dismiss="modal">
													关闭
												</button>
												<button id="save13" type="button" onclick="window.location.reload()" class="btn btn-primary ">
													提交保存
												</button>
								</div>
							</form>
			     </div>
				   </div>
			     </div>
		       </div>
	         </div>
	       </div>
	    </div> 
	 </div><!-- 内容区域 -->
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
   <script language="javascript" src="../js/PCASClass.js"></script>
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/mySidenav.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=p5qT2V6OajYx5sTtmqco3kARG2wQeuo8"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    	$("footer").load("../footer.html");
//  	$(".col-md-10").load("xmdj.php");
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
    </script>
    <script type="text/javascript">
			$("#save13").click(function(){ 
					$.ajax({
	                cache: true,
	                type: "POST",
	                url:'gcbc.php',
	                data:$('#gcbcform').serialize(),// 你的formid
	                async: false,
	                error: function(request) {
	                    alert("Connection error");
	                },
	                success: function(data) {
	                    alert("保存成功");
	                }
			            });
			});  


   </script>
   <script type="text/javascript">
	    jeDate({
			dateCell:"#jcrq",
			format:"YYYY-MM-DD",
			isinitVal:true,
			isTime:true, //isClear:false,
			minDate:"2014-09-19 00:00:00",
			okfun:function(val){alert(val)}
		})
	</script>
   <script type="text/javascript"src="../js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../js/jquery.qrcode.min.js"></script>
  </body>
</html>
