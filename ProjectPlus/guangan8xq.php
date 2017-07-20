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
        
      
      </div>
    </nav>
    <div id="container" class="container">
    	<div class="row">
    		
    		
    		<!-- 内容区域 -->
    		<div class="col-md-12">
    		<div id="xmdj" class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">屋面及楼地面工程</h3>
	</div>
	
	<div class="panel-body">
		<!-- Nav tabs -->
	
							<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
			<li role="presentation"><a href="#jbxx" role="tab" data-toggle="tab">基本信息</a></li>
			<li role="presentation"><a href="#xjcd" role="tab" data-toggle="tab">新建测点</a></li>
			<li role="presentation"><a href="#scslsj" role="tab" data-toggle="tab">实测实量数据</a></li>
			
			<li role="presentation" class="dropdown"> </li>
   
		</ul>	
							<!-- Tab panes -->
							
		
    <!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="jbxx">
									<p></p>
									
										<?php
//										echo $_GET["id"];
										  
										  require("../conn.php");
										  $id=$_GET["id"];
//										  $gcid1=$_GET["gcid"];
										  $yhid=$_GET["yhid"];
										  
										  
											$sql = "select * from 观感评价  where 项目类别='屋面及楼地面工程 'and id='$id' ";
											$result = $conn->query($sql);
											while($row = $result->fetch_assoc()) {
                         					
                     ?>
                     
									<form id="jbxxbcform" name="jbxxbcform" action="jbxxbc.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
									<!--<form id="xmdjform4" action="xg4.php" class="form-horizontal cmxform" enctype="multipart/form-data" role="form"  method="post">-->	
										<div class="panel-heading">
											
										<!--<h3 class="panel-title label label-info"></h3>--><HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1>
										</div>
										
												<div class="form-group">
													<label for="btmc" class="col-sm-2 control-label">标题名称：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="btmc" name="btmc" value="<?php echo $row["标题名称"];?>" placeholder="标题名称">
													</div>
													<label for="jcbw" class="col-sm-2 control-label">检查部位：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="jcbw" name="jcbw" value="<?php echo $row["检查部位"];?>" placeholder="检查部位">
													</div>
												</div>
												<div class="form-group">
													<label for="jcrq" class="col-sm-2 control-label">检查日期：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="jcrq" name="jcrq" value="<?php echo $row["检查日期"];?>" placeholder="检查日期">
													</div>
													<label for="jcry" class="col-sm-2 control-label">检查人员：</label>
													<div class="col-sm-3">
														<input type="text" class="form-control" id="jcry" name="jcry" value="<?php echo $row["检查人员"];?>" placeholder="检查人员">
													</div>
												</div>
												
										<div class="panel-heading">
										<!--<h3 class="panel-title label label-info">部门或分公司管理人员</h3>--><HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1>
										</div>
											<div class="form-group">
												<label for="sgbz" class="col-sm-2 control-label">施工班组：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="sgbz" name="sgbz" value="<?php echo $row["施工班组"];?>" placeholder="施工班组">
												</div>
												<label for="zzxm" class="col-sm-2 control-label">组长姓名：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="zzxm" name="zzxm" value="<?php echo $row["组长姓名"];?>" placeholder="组长姓名">
												</div>
											</div>
											<div class="form-group">
												<label for="lxfs" class="col-sm-2 control-label">联系方式：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="lxfs" name="lxfs" value="<?php echo $row["联系方式"];?>" placeholder="联系方式">
												</div>
												<label for="sgrq" class="col-sm-2 control-label">施工日期：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="sgrq" name="sgrq" value="<?php echo $row["施工日期"];?>" placeholder="施工日期">
												</div>
											</div>
											
									   <HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1>
									<div class="form-group">
											<label for="gzms" class="col-sm-2 control-label">工作描述：</label>
											<div class="col-sm-7">
												<textarea class="form-control" rows="5" id="gzms" value="<?php echo $row["工作描述"];?>" name="gzms"><?php echo $row["工作描述"];?></textarea>
											</div>
											
											<input type="text" style="width: 200px" id="id" name="id" class="form-control hidden" value="<?php echo $row["id"];?>"/>
										</div>
										<div class="form-group">						
											<div class="col-sm-offset-3 col-sm-7">							
												<p class="help-block col-xs-12 col-md-6">附件上传</p>
											
												  <input type="file" name="file" id="file" value=""><br>
												
														<a href="upload/<?php echo $row["附件上传"];?>" target="_Blank">
															<img src="upload/<?php echo $row["附件上传"];?>" class="col-md-6" alt="查看附件" />
														</a>
											</div>
										</div>
									  
									
									<div class="modal-footer" >
						<button type="button" class="btn btn-default " data-dismiss="modal">		<a href="scsl1.php?id=<?php echo $yhid=$_GET["gcid"];?>&yhid=<?php echo $yhid=$_GET["yhid"]; ?>">返回上一层
						</a></button>
								
									<input type="submit" class="btn btn-primary col-sm-offset-9" name="submit" value="保存">
	
					</div>
					 
									    <?php
														}
														$conn->close();	
													 ?>
									</form>
								</div>
			
		
		<!--新建测点-->
			<div role="tabpanel" class="tab-pane fade " id="xjcd">
									<p></p>      
				<form id="xjcdform" name="xjcdform" action="xjcdbc.php" method="post" class="form-horizontal" role="form" >
					<div class="form-group">
						<label for="cdlb" class="col-sm-3 control-label">测点类别：</label>
								<div class="col-sm-3">
											<select id="cdlb" name="cdlb" class="form-control">
												<option>表面平整度</option>
												<option>垂直度</option>
												<option>外窗洞口尺寸</option>
											</select>
											</div>
						<label for="overpg" class="col-sm-3 control-label">测点编号：</label>
										<div class="col-sm-3">
											<select id="cdbh" name="cdbh" class="form-control">
												<option>A</option>
												<option>B</option>
												<option>C</option>
												<option>D</option>
												<option>E</option>
												<option>F</option>
											</select>
										</div>
						</div>
						<div class="form-group">
								<label for="scz" class="col-sm-3 control-label">测点实测值：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="scz" name="scz" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
								</div>
								<label for="cdsl" class="col-sm-3 control-label">测点数量：</label>
								<div class="col-sm-3">
										<input type="text" class="form-control" id="cdsl" name="cdsl" value="" placeholder="测点个数">
										<input type="text" class="form-control hidden" id="jzgcid" name="jzgcid" value="<?php echo $_GET["id"];?>" >
								</div>
						</div>
						<div class="form-group">
								<label for="cdsm" class="col-sm-3 control-label">查看测点说明：</label>
								<div class="col-sm-3">
									<button id="cdsm" type="button"  class="btn btn-primary ">
										测点说明
									</button>
								</div>
						</div>
							<div class="col-sm-3">
											<input type="text" class="form-control hidden" id="xmlb" name="xmlb" value="屋面及楼地面工程" placeholder="">
							
							</div>									
								<div class="modal-footer" >
									<button type="button" class="btn btn-default " data-dismiss="modal">		<a href="scsl1.php?id=<?php echo $yhid=$_GET["gcid"];?>&yhid=<?php echo $yhid=$_GET["yhid"]; ?>">返回上一层
						</a></button>
									<button id="save3" type="button" onclick="window.location.reload()" class="btn btn-primary ">
										提交保存
									</button>
					</div>
									</form>
								</div>
		<!--新建测点-->
		
		<!--实测实量数据-->
		<div role="tabpanel" class="tab-pane fade " id="scslsj">
				<p></p>
			<form id="cdbcform" name="cdbcform"  method="post" class="form-horizontal" role="form" >
    					<!--<table id="table_gclb1">
    						<thead>
    							<tr>
    								<th>测点</th>
    								<th>类别</th>
							      <th>实测值</th>
    					      </thead>
    						<tbody>-->
    							 <?php
                   require("../conn.php");   
				   				 $jcid=$_GET["id"];                
                   $sql = "select * from  观感评价新建测点 where 项目类别='屋面及楼地面工程' and 建筑工程id='$jcid' ";
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                   ?>
            <div class="form-group">
								<label for="scz" class="col-sm-2 control-label">测点类别：</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" id="scz" name="scz" value="<?php echo $row["测点类别"];?>" >
									<input type="text" class="form-control hidden" id="cddid" name="cddid" value="<?php echo $row["id"];?>" >	
								</div>
								<label for="cdsl" class="col-sm-2 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="cdsl" name="cdsl" value="<?php echo $row["测点编号"];?>" >
								</div>
								<label for="cdsl" class="col-sm-2 control-label">测点实测值：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="cdsl" name="cdsl" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
								</div>
						</div>
                   <!--<tr class="">
                   <td><?php echo $row["测点类别"];?></a></td>
                   <td><?php echo $row["测点编号"];?></a></td>
                   <td><?php echo $row["测点实测值"];?></a></td>-->
				          <?php
										}
										$conn->close();
																					
									?>
								   <button id="cdbc" type="button" onclick="window.location.reload()" class="btn btn-primary ">
										保存
						</button>   
    						<!--</tbody>
    					</table>-->
    				</div>
    				
				</form>
			</div>
		<!--实测实量数据-->
		
		
		
				
				
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
										实测实量新建填写
									</h4>
								</div>
								<div class="modal-body">
						<form id="gcbcform" name="gcbcform" action="gcbcbc.php" method="post" class="form-horizontal" role="form" >
							<div class="form-group ">
								<label for="jzmj" class="col-sm-3 control-label">负责人：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="jzmj" name="jzmj" placeholder="">							
								</div>
									<label for="cs" class="col-sm-3 control-label">负责人：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="cs" name="cs" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label for="gd" class="col-sm-3 control-label">负责人：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="gd" name="gd" placeholder="" >
								</div>
								
								<label for="sgbw" class="col-sm-3 control-label">负责人：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="sgbw" name="sgbw" placeholder="" >
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
										<?php
															}
															$conn->close();		
														?>
														
									<input type="text" class="form-control hidden" id="gclb" name="gclb" value="砌体工程">						
														
								</div>
							</div>
							<div class="form-group">
								<label for="jksd" class="col-sm-3 control-label">基坑深度(m)：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="jksd" name="jksd" placeholder="">
								</div>
								
								<label for="wcfw" class="col-sm-3 control-label">允许最大误差范围(m)：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="wcfw" name="wcfw" placeholder="">
								</div>
							</div>
							
								<div class="form-group">
								<label for="ggpj" class="col-sm-3 control-label">观感评价：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="ggpj" name="ggpj" placeholder="">
								</div>
								
								<label for="zhdf" class="col-sm-3 control-label">综合得分：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="zhdf" name="zhdf" placeholder="">
								</div>
							</div>
				
							<div class="modal-footer" >
											<button type="button" class="btn btn-default " data-dismiss="modal">关闭
											</button>
											<button id="save13" type="button" onclick="window.location.reload()" class="btn btn-primary ">
												提交保存
											</button>
											<!--<input type="submit" id="save10"  onclick="goback()" class="btn btn-primary" value="提交保存">-->
							</div>
						</form>
					
		        </div>
							</div><!-- /.modal-content -->
					<!--	</form>-->
						</div><!-- /.modal -->
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
    </script>

		<script type="text/javascript">
//		  var cdlb=document.getElementById(cdlb);
//		  var cdbh=document.getElementById(cdbh);
//		  var scz=document.getElementById(scz);
//		  var cdsl=document.getElementById(cdsl);
//		  var jzgcid=document.getElementById(jzgcid);
//			$("#save3").click(function(){ 
//				alert ('123');
//			     $.ajax({
//      	url:'xjcdbc.php'',
//      	type:'post',
//      	dataType:'json',
//      	data:{
//      		cdlb:cdlb.value,
//				    cdbh:cdbh.value,
//				    scz:scz.value,
//				    cdsl:cdsl.value,
//				    jzgcid:jzgcid.value
//      	},
//      	success:function(data){
//							alert("保存成功");
//          
//       },
//       error:function(xhr,type,errorThrown){
//       	alert('ajax错误'+type);
//       }
//      });	}); 
        $("#save3").click(function(){ 
		
					$.ajax({
			                cache: true,
			                type: "POST",
			                url:'ggpjxjcdbc.php',
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
		 $("#cdbc").click(function(){ 
		
					$.ajax({
			                cache: true,
			                type: "POST",
			                url:'cdbcbb.php',
			                data:$('#cdbcform').serialize(),// 你的formid
			                async: false,
			                error: function(request) {
			                    alert("Connection error");
			                },
			                success: function(data) {
			                    alert('保存成功');
			                }
			            });
			});
</script>

  </body>
</html>

