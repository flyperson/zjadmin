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
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/docs.css"/>
    <!-- Custom styles for this template -->
    <link href="../css/theme.css" rel="stylesheet">
    
    <!-- Custom styles for bootstrap-table -->
    <link href="../css/bootstrap-table.min.css" rel="stylesheet">
    <link href="../css/mycss.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
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
    							<li><a href="gcz.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">班组维护</a></li>
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
    							<li><a href="bianhao.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">整改通知书编号维护</a></li>
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
    							<li class="active"><a href="wxy.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">危险源类型维护</a></li>
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
    			<div class="panel panel-info">
    				<div class="panel-heading">
    					<h3 class="panel-title">工程列表</h3>
    				</div>
    				<div class="panel-body">
    					<!-- 表格自定义按钮 -->
    					<div id="toolbar" class="btn-group">
    						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
    							<i class="glyphicon glyphicon-plus"> 新建</i>
    						</button>
    						
    						<button type="button" class="btn btn-default">
    							<i class="glyphicon "> 删除</i>
    						</button>
    						<button type="button" class="btn dropdown-toggle" id="dropdownMenu1"
     			 data-toggle="dropdown">
     			对象
     				 <span class="caret"></span>
 						  </button>
  						 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    						  <li role="presentation">
        					 <a role="menuitem" tabindex="-1" href="#"></a>
     						  </li>
     						 <li role="presentation">
        					 <a role="menuitem" tabindex="-1" href="#">施工单位</a>
     						 </li>
   							   <li role="presentation">
    		  				   <a role="menuitem" tabindex="-1" href="#">
          				  监理单位
         					</a>
      						</li>
      						
      						<li role="presentation">
       						  <a role="menuitem" tabindex="-1" href="#">项目负责人</a>
      						</li>
  							 </ul>
    					</div>
    					
    					
    					
    					<table id="table_gclb">
    						<thead>
								      <tr>
								         <th>序号</th>
								         <th>危险源</th>
								 <!--        <th>内容（是否保留？）</th>-->
								      </tr>
								   </thead>
								   <tbody>
								      <?php
                   						require("../conn.php");
                   						$sql = "select * from 选择类型 ";
                   						$result = $conn->query($sql);
                   						while($row = $result->fetch_assoc()) {
                   						?>
                   						<tr class="">
                  						<td><?php echo $row["id"];?></td>
							            <td><?php echo $row["危险源类型"];?></td>
							          <!--  <td>？</td>-->

										         <?php
															}
															$conn->close();		
														 ?>
								   </tbody>
    					</table>
    				</div>
    				<!-- 模态框（Modal） -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<form id="wxyform" action="wxy.php" method="post">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h3 class="modal-title" id="myModalLabel">
										危险源类型添加
									</h3>
								</div>
								
					<div class="modal-body">
					<div class="form-group">
						<label for="gcmc" class="col-sm-3 control-label">危险源类型：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="wxylx" name="wxylx" placeholder="">
						</div>
						

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭
						</button>
						<button id="save12" type="button"  onclick="location.reload()"  class="btn btn-primary col-sm-offset-9">保存</button>
					</div>	
						</div><!-- /.modal-content -->
						</form>
						</div><!-- /.modal -->
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
    <script type="text/javascript">
    $(document).ready(function() {
    	$("footer").load("../footer.html");
   		;
    });
    $('table').bootstrapTable({		
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
  
   <script type="text/javascript"src="../js/jquery.validate.min.js"></script>
    <script type="text/javascript">
$("#save12").click(function(){ 
    $.ajax({ 
        url:'wxybc.php', 
        type:"POST", 
        data:$('#wxyform').serialize(),
    
    }); 
});  
</script>
<script>
 function goback(){
 window.location.href="wxy.php";
}
</script>   
    
  </body>
</html>