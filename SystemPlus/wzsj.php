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
    							<li class="active" ><a href="wzsj.php?yhid=<?php echo $yhid=$_GET["yhid"]; ?>">违章数据库维护</a></li>
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
    					<h3 class="panel-title">违章数据库</h3>
    				</div>
	<div class="panel-body">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation"><a href="#zrr" role="tab" data-toggle="tab">安全</a></li>
			<li role="presentation"><a href="#glry" role="tab" data-toggle="tab">质量</a></li>
		</ul>	
    <!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="zrr">
				
				
			
				<p></p>
				<div id="toolbar1" class="btn-group">
							
    					<!--<div class="btn-group">
								<button type="button" class="btn btn-default">对象</button>
								<button type="button" class="btn btn-default dropdown-toggle" 
									data-toggle="dropdown">
										<span class="caret"></span>
										<span class="sr-only">切换下拉菜单</span>
								</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">监督单位</a></li>
										<li><a href="#">管理单位</a></li>
										<li><a href="#">项目负责人</a></li>
									</ul>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default">类型</button>
								<button type="button" class="btn btn-default dropdown-toggle" 
										data-toggle="dropdown">
										<span class="caret"></span>
										<span class="sr-only">切换下拉菜单</span>
								</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">项目</a></li>
										<li><a href="#">内容</a></li>
										<li><a href="#">时间</a></li>
									</ul>
								</div>-->
            		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#aqxj">
    							<i class="glyphicon glyphicon-plus"> 新建</i>
    						</button>
    						<!--<button type="button" class="btn btn-default">
    							<i class="glyphicon "> 删除</i>
    						</button>-->
    				</div>
				<table id="table_gclb">
    						<thead>
    							
    							<tr>
    								<th >违章大类</th>
    								<th >检查项目</th>
    								<th>内容</th>
    								<th>对象</th>
    								<th>类型</th>
    								<th>扣分值</th>
    								<th>操作</th>
    					      </thead>
    						<tbody>
								      <?php
                   require("../conn.php");
                   $sql = "select * from 违章数据库  where 违章状态='安全'";
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                        					
                   ?>
                   <tr class="">
                   <td><?php echo $row["违章大类"];?></td>
                   <td><a href=""><?php echo $row["检查项目"];?></a></td>
                   <td><?php echo $row["内容"];?></td>
                   <td><?php echo $row["对象"];?></td>
                   <td><?php echo $row["类型"];?></td>
                   <td><?php echo $row["扣分值"];?></td>
                   <td><a href="wzsjxg.php?id=<?php echo $row["id"];?>">修改</a></td>
                   
                   <!--<td><a class="xxi" sjc="<?php echo $row["时间戳"];?>">详细</a></td>
                   <td><a class="schu" sjc="<?php echo $row["时间戳"];?>">删除</a></td>
                   <td class="hidden"><a id="<?php echo $row["时间戳"];?>" class="delete" href="javascript:;" >Delete</a></td>
                   <td><a class="QrCode" sjc="<?php echo $row["时间戳"];?>">操作</a></td>
                     
                   </tr>-->
                   <?php
						}
						$conn->close();
																	
					?>
								   </tbody>
    					</table>		
		
			</div>
			
			<!--	安全新建模态框-->
    					<div class="modal fade" id="aqxj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<form id="wzform1" action="wzsjbc.php" method="post">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">
										质量违章数据库登记
									</h4>
								</div>
								
								<div class="modal-body">
					<div class="form-group">
						<label for="wzdl" class="col-sm-3 control-label">违章大类：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="wzdl" name="wzdl" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="jcxm" class="col-sm-3 control-label">检查项目：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="jcxm" name="jcxm" placeholder="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="nr" class="col-sm-3 control-label">内容：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="nr" name="nr" placeholder="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="dx" class="col-sm-3 control-label">对象：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="dx" name="dx" placeholder="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="lx" class="col-sm-3 control-label">类型：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="lx" name="lx" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="kfz" class="col-sm-3 control-label">扣分值：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="kfz" name="kfz" placeholder="">
						</div>
					</div>
					
					
						<div class="form-group">
										<label for="wzzt" class="col-sm-3 control-label">违章状态：</label>
										<div class="col-sm-3">
											<select id="wzzt" name="wzzt" class="form-control">
												<option>安全</option>
																		
											</select>
										</div>
										</div>
							 
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭
									</button>
									<button id="save9" type="button" onclick="goback()"   class="btn btn-primary col-sm-offset-9">保存</button>
								</div>
								
							</div><!-- /.modal-content -->
							</form>
						</div><!-- /.modal -->
					
					</div>
					
					
					
    		
			<div role="tabpanel" class="tab-pane fade " id="glry">
				<p></p>
				<div id="toolbar2" class="btn-group">
							
    					<!--<div class="btn-group">
								<button type="button" class="btn btn-default">对象</button>
								<button type="button" class="btn btn-default dropdown-toggle" 
									data-toggle="dropdown">
										<span class="caret"></span>
										<span class="sr-only">切换下拉菜单</span>
								</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">监督单位</a></li>
										<li><a href="#">管理单位</a></li>
										<li><a href="#">项目负责人</a></li>
									</ul>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default">类型</button>
								<button type="button" class="btn btn-default dropdown-toggle" 
										data-toggle="dropdown">
										<span class="caret"></span>
										<span class="sr-only">切换下拉菜单</span>
								</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">实体</a></li>
										<li><a href="#">行为</a></li>
										
									</ul>
							</div>-->
            		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#zlxj">
    							<i class="glyphicon glyphicon-plus"> 新建</i>
    						</button>
    						<!--<button type="button" class="btn btn-default">
    							<i class="glyphicon "> 删除</i>
    						</button>-->
    				</div>
    				
    			
    				
				<table id="table_gclb">
    						<thead>
    							
    							<tr>
    								<th >违章大类</th>
    								<th >检查项目</th>
    								<th>内容</th>
    								<th>对象</th>
    								<th>类型</th>
    								<th>扣分值</th>
    								<th>操作</th>
    					      </thead>
    						<tbody>
								      <?php
                   require("../conn.php");
                   $sql = "select * from 违章数据库  where 违章状态='质量'";
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                        					
                   ?>
                   <tr class="">
                   <td><?php echo $row["违章大类"];?></td>
                   <td><a href=""><?php echo $row["检查项目"];?></a></td>
                   <td><?php echo $row["内容"];?></td>
                   <td><?php echo $row["对象"];?></td>
                   <td><?php echo $row["类型"];?></td>
                   <td><?php echo $row["扣分值"];?></td>
                   <td><a href="wzsjxg.php?id=<?php echo $row["id"];?>">修改</a></td>
                   
                   <!--<td><a class="xxi" sjc="<?php echo $row["时间戳"];?>">详细</a></td>
                   <td><a class="schu" sjc="<?php echo $row["时间戳"];?>">删除</a></td>
                   <td class="hidden"><a id="<?php echo $row["时间戳"];?>" class="delete" href="javascript:;" >Delete</a></td>
                   <td><a class="QrCode" sjc="<?php echo $row["时间戳"];?>">操作</a></td>
                     
                   </tr>-->
                   <?php
						}
						$conn->close();
																	
					?>
								   </tbody>
    					</table>		
			</div>
		</div>
		
		<!--	质量新建模态框-->
    					<div class="modal fade" id="zlxj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<form id="wzform" action="wzsjbc.php" method="post">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">
										质量违章数据库登记
									</h4>
								</div>
								
								<div class="modal-body">
					<div class="form-group">
						<label for="wzdl" class="col-sm-3 control-label">违章大类：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="wzdl" name="wzdl" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="jcxm" class="col-sm-3 control-label">检查项目：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="jcxm" name="jcxm" placeholder="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="nr" class="col-sm-3 control-label">内容：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="nr" name="nr" placeholder="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="dx" class="col-sm-3 control-label">对象：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="dx" name="dx" placeholder="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="lx" class="col-sm-3 control-label">类型：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="lx" name="lx" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label for="kfz" class="col-sm-3 control-label">扣分值：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="kfz" name="kfz" placeholder="">
						</div>
					</div>
					
					
						<div class="form-group">
										<label for="wzzt" class="col-sm-3 control-label">违章状态：</label>
										<div class="col-sm-3">
											<select id="wzzt" name="wzzt" class="form-control">
												<option>质量</option>
																		
											</select>
										</div>
										</div>
							 
								
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭
									</button>
									<button id="save8" type="button"  onclick="goback()"   class="btn btn-primary col-sm-offset-9">保存</button>
								</div>
								
							</div><!-- /.modal-content 
							</form>
						</div><!-- /.modal -->
					</div>-->
		
		</div>
		
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">违章数据库登记</h4>
      </div>
      <div class="modal-body">
      <!--
      	作者：329864123@qq.com
      	时间：2016-11-08
      	描述：输入框组
      -->
      <div class="input-group">
          <span class="input-group-addon">违章大类</span>
					<div class="input-group-btn">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
							<span class="caret"></span>
							<span class="sr-only">切换下拉菜单</span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">实体质量</a></li>
							<li><a href="#">质量行为</a></li>
							<li><a href="#">其他</a></li>
						</ul>
					</div><!-- /btn-group -->
					<input type="text" class="form-control">
				</div><!-- /input-group -->
      <div class="input-group">
  			<span class="input-group-addon">检查项目：</span>
  			<input type="text" class="form-control" placeholder="混凝土工程">
			</div>
			<div class="input-group input-group-lg input-group-lg">
  			<span class="input-group-addon ">内容：</span>
  			<input type="text" class="form-control" placeholder="混凝土结构超耗使用">
			</div>
			<div class="input-group">
  			<span class="input-group-addon">对象：</span>
  		  	<input type="checkbox"> 施工单位
  		  	<input type="checkbox"> 单位
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary">保存</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">违章数据库登记</h4>
      </div>
      <div class="modal-body">
    
      <div class="input-group">
          <span class="input-group-addon">违章大类</span>
					<div class="input-group-btn">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
							<span class="caret"></span>
							<span class="sr-only">切换下拉菜单</span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">实体质量</a></li>
							<li><a href="#">质量行为</a></li>
							<li><a href="#">其他</a></li>
						</ul>
					</div><!-- /btn-group -->
					<input type="text" class="form-control">
				</div><!-- /input-group -->
      <div class="input-group">
  			<span class="input-group-addon">检查项目：</span>
  			<input type="text" class="form-control" placeholder="混凝土工程">
			</div>
			<div class="input-group input-group-lg input-group-lg">
  			<span class="input-group-addon ">内容：</span>
  			<input type="text" class="form-control" placeholder="混凝土结构超耗使用">
			</div>
			<div class="input-group">
  			<span class="input-group-addon">对象：</span>
  		  	<input type="checkbox"> 施工单位
  		  	<input type="checkbox"> 单位
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary">保存</button>
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
$("#save8").click(function(){ 
    $.ajax({ 
        url:'wzsjbc.php', 
        type:"POST", 
        data:$('#wzform').serialize(),
    
    }); 
});  
$("#save9").click(function(){ 
    $.ajax({ 
        url:'wzsjbc.php', 
        type:"POST", 
        data:$('#wzform1').serialize(),
    
    }); 
});  
</script>
<script>
 function goback(){
 window.location.href="wzsj.php";
}
</script>
     
    
  </body>
</html>
