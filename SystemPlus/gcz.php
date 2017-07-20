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
								$yhid=$_GET["yhid"];
	   						$sql = "select * from 用户信息   where id='$yhid'";
	   						$result = $conn->query($sql);
	   						while($row = $result->fetch_assoc()) {
   					?>
          <a class="navbar-brand" href="../index.php?yhzh=<?php echo $row["账号"];?>">中建二局三公司</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../index.php?yhzh=<?php echo $row["账号"];?>">项目管理</a></li>
            <li><a href="../seclect.php?yhid=<?php echo $row["id"];?>">综合查询</a></li>
            <li class="active"><a href="../system.php?yhid=<?php echo $row["id"];?>">系统管理</a></li>
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
    		<div class="col-md-2">
    			<div class="bs-docs-sidebar affix" role="complementary">
    				<ul class="nav bs-docs-sidenav">
    					<li class="active">
    						<a>数据维护</a>
    						<ul class="nav">
    								<?php
			   						require("../conn.php");
										$yhid=$_GET["yhid"];
//										echo $yhid;
			   						$sql3 = "select * from 用户信息   where id='".$yhid."' and 权限 LIKE '%日志类型维护%'";
										$result = $conn->query($sql3);
	                  $count=mysqli_num_rows($result);	
										if ($result->num_rows > 0) {
	   					    ?>
    							<li><a href="rzll.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">日志类型维护</a></li>
    							<?php
										}
									 ?>
    							<?php
			   						require("../conn.php");
										$yhid=$_GET["yhid"];
//										echo $yhid;
			   						$sql3 = "select * from 用户信息   where id='".$yhid."' and 权限 LIKE '%班组维护%'";
										$result = $conn->query($sql3);
	                  $count=mysqli_num_rows($result);	
										if ($result->num_rows > 0) {
	   					    ?>
    							<li  class="active"><a href="gcz.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">班组维护</a></li>
    							<?php
										}
									 ?>
    							  <?php
			   						require("../conn.php");
										$yhid=$_GET["yhid"];
			   						$sql1 = "select * from 用户信息   where id='$yhid' and 权限 LIKE '%工程信息维护%'";
										$result = $conn->query($sql1);
	                  $count=mysqli_num_rows($result);	
										if ($result->num_rows > 0) {
	   					    ?>
			   					 	<li><a href="gcxx.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">工程信息维护</a></li>
			   					 <?php
										}
									 ?>
    							<?php
			   						require("../conn.php");
										$yhid=$_GET["yhid"];
			   						$sql2 = "select * from 用户信息   where id='$yhid' and 权限 LIKE '%整改通知单编号维护%'";
										$result = $conn->query($sql2);
	                  $count=mysqli_num_rows($result);	
										if ($result->num_rows > 0) {
											
	   					    ?>
    							<li ><a href="bianhao.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">整改通知书编号维护</a></li>
    							<?php
										}
									 ?>
    							<!--<li><a href="sbcq.html">设备产权单位</a></li>
    							<li><a href="xmjbxx.html">基本信息</a></li>
    							<li><a href="lygs.html">联营公司数据库</a></li>
    							<li><a href="fbgs.html">分包公司数据库</a></li>-->
    							<?php
			   						require("../conn.php");
										$yhid=$_GET["yhid"];
//										echo $yhid;
			   						$sql3 = "select * from 用户信息   where id='".$yhid."' and 权限 LIKE '%用户管理维护%'";
										$result = $conn->query($sql3);
	                  $count=mysqli_num_rows($result);	
										if ($result->num_rows > 0) {
	   					    ?>
    							<li ><a href="yhgl.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">用户管理维护</a></li>
    							<?php
										}
									 ?>
									 <?php
			   						require("../conn.php");
										$yhid=$_GET["yhid"];
			   						$sql4 = "select * from 用户信息   where id='$yhid' and 权限 LIKE '%违章数据库维护%'";
										$result = $conn->query($sql4);
	                  $count=mysqli_num_rows($result);	
										if ($result->num_rows > 0) {
										
	   					    ?>
    							<li ><a href="wzsj.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">违章数据库维护</a></li>
    							<?php
										}
									 ?>
									 <?php
			   						require("../conn.php");
										$yhid=$_GET["yhid"];
			   						$sql5 = "select * from 用户信息   where id='$yhid' and 权限 LIKE '%危险源类型维护%'";
										$result = $conn->query($sql5);
	                  $count=mysqli_num_rows($result);	
										if ($result->num_rows > 0) {
	   					    ?>
    							<li><a href="wxy.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">危险源类型维护</a></li>
    							<?php
										}
									 ?>
									 <?php
			   						require("../conn.php");
										$yhid=$_GET["yhid"];
			   						$sql6 = "select * from 用户信息   where id='$yhid' and 权限 LIKE '%数据库备份和恢复%'";
										$result = $conn->query($sql6);
	                  $count=mysqli_num_rows($result);	
										if ($result->num_rows > 0) {
	   					    ?>
    							<li><a href="sjk.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">数据库备份和恢复</a></li>
    							<?php
										}
									 ?> 
    						</ul>
    					</li>    					
    					
    				</ul>
    			</div>    			
    		</div><!--左侧导航菜单 -->
    		
    		<!-- 内容区域 -->
    		<div class="col-md-10">
    		<div id="xmdj" class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">班组维护</h3>
	</div>
	
	<div class="panel-body">
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
    								<th>编号</th>
    								<th>班组名称</th>
							     
    								<th>操作</th>
    								
    							</tr>
    					      </thead>
    						<tbody>
			          	<?php
                   require("../conn.php");
                   $sql = "select * from 工程组维护  ";
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                         					
                   ?>
                   <tr class="">
                   <!--<td class="hidden"><?php echo $row["id"];?></td>-->
                   <!--<td><a href="ProjectPlus/Project_in.php？id='+<?php echo $row["工程名称"];?>+'"><?php echo $row["工程名称"];?></a></td>-->
                   <td><?php echo $row["编号"];?></td>
                   <td><?php echo $row["工程组"];?></td>
                   
                   <td> 
                   	 	<a href="gczxg.php?id=<?php echo $row["id"];?>yhid="><button type="button"   class="btn btn-default">
                   				修改
                   	</button></a>
                   		<button id="<?php echo $row["id"];?>" onclick="dianji(this.id);" type="button" class="btn btn-default">
                   	 		删除
                   	 	</button>
                   </td>
                    </tr>
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
										新建
									</h4>
								</div>
								<div class="modal-body">
						<form id="yhglform" name="yhglform" method="post" class="form-horizontal" role="form" >
							<div class="form-group ">
								<label for="gcz" class="col-sm-3 control-label">班组名称：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="gcz" name="gcz" placeholder="">							
								</div>
								<label for="xm" class="col-sm-3 control-label">编号：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="bh" name="bh" placeholder="">							
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
			$("#save13").click(function(){ 
					$.ajax({
	                cache: true,
	                type: "POST",
	                url:'gczbc.php',
	                data:$('#yhglform').serialize(),// 你的formid
	                async: false,
	                error: function(request) {
	                    alert("Connection error");
	                },
	                success: function(data) {
	                    alert("保存成功");
	                }
			            });
			});  
			function dianji(id){
//							alert(id);
							$.ajax({
				                cache: true,
				                type: "POST",
				                url:'gczsc.php',
				                data:{
				                	gcid1:id
				                },// 你的formid
				                async: false,
				                error: function(request) {
				                    alert("Connection error");
				                },
				                success: function(data) {
				                    alert("删除成功");
				                    window.location.reload();
				                }
				            }); 
						};		

			var creatDom1=function(){
				//alert("测试");
				var grqxxs=document.getElementById("grqxxs");
				grqxxs.innerHTML='<tr><td><input name="checkbox" class="" type="checkbox" id="xmgl" value="工程信息维护"></td><td>工程信息维护</td></tr><tr><td><input name="checkbox" type="checkbox" id="sbgl" value="整改通知单编号维护"></td><td>整改通知单编号维护</td></tr><tr><td><input name="checkbox" type="checkbox" id="wxygl" value="用户管理维护"></td><td>用户管理维护</td></tr><tr><td><input name="checkbox" type="checkbox" id="sbgl" value="违章数据库维护"></td><td>违章数据库维护</td></tr><tr><td><input name="checkbox" type="checkbox" id="wxygl" value="危险源类型维护"></td><td>危险源类型维护</td></tr><tr><td><input name="checkbox" type="checkbox" id="wxygl" value="数据库备份与恢复"></td><td>数据库备份与恢复</td></tr>';
			};
//			var suoding11=function(quanxian,num){
//						var grqxxs=document.getElementById("grqxxs");
//						var quxnain1Shuzu=grqxxs.getElementsByTagName("input");
//						quxnain1Shuzu[num].setAttribute("checked","checked");
//					};
					//此函数是onchange属性触发
			var suoding12=function(quanxian1,num){
//						alert (quanxian1);
						var strIng1=new Array();
							strIng1=quanxian1.split(",");
							var num1=strIng1[1];
//						alert(num1);
//						var number11=num1+1;
						var grqxxs=document.getElementById("grqxxs");
						var quxnain11Shuzu=grqxxs.getElementsByTagName("input");
						//alert(quxnain11Shuzu.length);
						quxnain11Shuzu[num1].setAttribute("checked","checked");
					};
			function cbm(bm){
//				alert(bm);
				var grqxxs=document.getElementById("grqxxs");
				//将之的DOM节点删除
				grqxxs.innerHTML="";
				//重新创建没有check
				creatDom1();
					var strs= new Array();
					strs=bm.split("||"); //字符分割
					for(var i=1;i<strs.length-1;i++){
//							alert(strs[i]);
							suoding12(strs[i],i);
						}
						
//							alert(strs.length);
					
					var ssbm1=document.getElementById("ssbm");
					ssbm1.value=strs[0];
//					var qxxs1=document.getElementById("qxxs1");
//					qxxs1.value=strs[1];
//					var qxxs2=document.getElementById("qxxs2");
//					qxxs2.value=strs[2];
//					var qxxs3=document.getElementById("qxxs3");
//					qxxs3.value=strs[3];
//					var qxxs4=document.getElementById("qxxs4");
//					qxxs4.value=strs[4];
//					var qxxs5=document.getElementById("qxxs5");
//					qxxs5.value=strs[5];
//					var qxxs6=document.getElementById("qxxs6");
//					
//					qxxs6.value=strs[6];
			};
			//点击提交按钮
			function save(){
				var check=document.getElementsByName("checkbox");
				var s = "";
 				var xixi = ' ';//初始化部位
 				var hehe = '';
				for(var i=0;i<check.length;i++){
   				if(check[i].checked){
   					s+=check[i].value+','+i+'||'; //如果未选中，将value添加到变量s中
							
   				} 
   				else{
   								
   				}
   			}
   			if(s==''){    							
   				alert("请选择权限");    					
   			}else{    			
   				var qxbc=document.getElementById("qxbc");
					qxbc.value=s;	
//					alert (qxbc.value);			    						
// 				alert(s);	
   			}
   			 
			};
   </script>
    <script type="text/javascript">
			function save1(){
//				var quxnain1=document.getElementById("quxnain1");
//				var quxnain1Input=document.getElementsByTagName("input");
				var check=document.getElementsByName("checkbox");  //这个获取的是这个界面中含有check属性的input
				var s = "";
 				var xixi = ' ';//初始化部位
 				var hehe = '';
				for(var i=0;i<check.length;i++){
   				if(check[i].checked){
   					s+=check[i].value+','+i+'||'; //如果未选中，将value添加到变量s中
							
   				} 
   				else{
   								
   				}
   			}
   			if(s==''){    							
   				alert("请选择权限");    					
   			}else{    			
   				var qxbc=document.getElementById("qxbc11");
					qxbc11.value=s;	
//					alert (qxbc.value);			    						
// 				alert(s);	
   			}
   			 
			};
   </script>
    <script type="text/javascript">
//  	function gradeChange(){
////  		var objS = document.getElementById("dept1");
////      var grade = objS.options[objS.selectedIndex].grade;
//      var objS11 = document.getElementById("dept1").value;
//
//  	};
//部门权限显示部门权限显示部门权限显示部门权限显示部门权限显示部门权限显示部门权限显示部门权限显示部门权限显示部门权限显示部门权限显示部门权限显示部门权限显示
			var creatDom=function(){
				//alert("测试");
				var quxnain1=document.getElementById("quxnain1");
				quxnain1.innerHTML='<tr><td><input name="checkbox" type="checkbox" id="gcxxwh" value="工程信息维护"></td><td>工程信息维护</td></tr><tr><td><input name="checkbox" type="checkbox" id="zgtzdbhwh" value="整改通知单编号维护"></td><td>整改通知单编号维护</td></tr><tr><td><input name="checkbox" type="checkbox" id="yhglwh" value="用户管理维护"></td><td>用户管理维护</td></tr><tr><td><input name="checkbox" type="checkbox" id="wzsjkwh" value="违章数据库维护"></td><td>违章数据库维护</td></tr><tr><td><input name="checkbox" type="checkbox" id="wxylxwh" value="危险源类型维护"></td><td>危险源类型维护</td></tr><tr><td><input name="checkbox" type="checkbox" id="sjkbfyhf" value="数据库备份与恢复"></td><td>数据库备份与恢复</td></tr>';
			};
	
			var dept1=document.getElementById("dept1");
			dept1.addEventListener('change',function getData(){
				//alert(dept1.value);
				var quxnain1=document.getElementById("quxnain1");
				quxnain1.innerHTML="";
				creatDom();
				$.ajax({
						 url:'bmqxdq.php',
						data:{
							dept1:dept1.value
						},
						dataType:'json',
						type:'post',
						timeout:10000,
						success:function(data){
							//alert(data);
							var length=data.length;
							for (var i=0;i<length-1;i++) {
								var quanxian=data[i].权限;
							fenge(quanxian);
							}
						},
						error:function(xhr,type,errorThrown){
							//异常处理；
							//alert('ajax错误'+type);
							return callback('ajax错误'+type+errorThrown);
						}
					});
					
					var fenge=function(quanxian){
						var strs=new Array();
						strs=quanxian.split("||");
						for(var i=0;i<strs.length-1;i++){
							//alert();
							
								suoding(strs[i],i);
						}
					};
					
					var suoding=function(quanxian,num){
						
						var strIng=new Array();
							strIng=quanxian.split(",");
							var num1=strIng[1];
						//alert(num1);
						var number1=num1-6;
						var quxnain1=document.getElementById("quxnain1");
						var quxnain1Shuzu=quxnain1.getElementsByTagName("input");
						quxnain1Shuzu[number1].setAttribute("checked","checked");
					};
			});

   </script>	   
  </body>
</html>

