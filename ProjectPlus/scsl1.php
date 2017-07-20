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
            <li class="active"><a href="../index.php?yhzh=<?php echo $row["账号"];?>">实测实量</a></li>
            <li><a href="../text/rzgl.php?yhid=<?php echo $row["id"];?>">日志管理</a></li>
             <li ><a href="../text/wdgl.php?yhid=<?php echo $row["id"];?>">文档管理</a></li>
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
    		
    			<?php
//										echo $_GET["id"];
										  $gcid=$_GET["gcid"];
										  $zljcid=$_GET["zljcid"];
										  require("../conn.php");
											$sql = "select * from 我的工程 where id='$gcid' ";
											$result = $conn->query($sql);
											while($row = $result->fetch_assoc()) {
                         					
                     ?>
    	<!--左侧导航菜单 -->
    		<div class="col-md-2">
    			<div class="bs-docs-sidebar affix" role="complementary">
    				<ul class="nav bs-docs-sidenav"> 					
    					<li><b style="margin-left:20px;">实测</b>
    						<a   href="scsl.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">建筑工程</a>
    						<ul class="nav">
    							<li><a href="scsl.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">混凝土结构工程</a></li>
    							<li class="active"><a href="scsl1.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">砌筑工程</a></li>
    							<li><a href="scsl2.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">抹灰工程</a></li>
    							<li><a href="scsl3.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">设备安装工程</a></li>
    						
    						</ul>
    					</li>  
    					
    					<li>
    						<a href="scsl4.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">装饰工程</a>
    						<ul class="nav">
    							<li><a href="scsl4.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">墙面涂饰面工程</a></li>
    							<li><a href="scsl5.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">墙面饰面砖工程</a></li>
    							<li><a href="scsl9.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">地面饰面砖工程</a></li>
    							<li><a href="scsl6.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">木地板安装工程</a></li>
    							<li><a href="scsl7.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">电梯前室、首层大堂</a></li>
    							<li><a href="scsl8.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">设备安装工程</a></li>
    							
    						</ul>
    					</li>  
    					  					 					
    					<li><b style="margin-left:20px;">观感</b>
    						<a   href="guangan1.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">建筑工程</a>
    						<ul class="nav">
    							<li><a href="guangan1.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">混凝土结构工程</a></li>
    							<li><a href="guangan2.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">砌体工程</a></li>
    							<li><a href="guangan3.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">内墙抹灰工程</a></li>
    							<li><a href="guangan4.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">外墙防水工程</a></li>
    							<li><a href="guangan5.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">门窗工程</a></li>
    							<li><a href="guangan6.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">卫生间、沉箱工程</a></li>
    							<li><a href="guangan7.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">水电安装工程</a></li>
    							<li><a href="guangan8.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">屋面及楼地面工程</a></li>
    						</ul>
    					</li>  
    					
    					<li>
    						<a href="guangan9.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">装饰工程</a>
    						<ul class="nav">
    							<li><a href="guangan9.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">外墙工程</a></li>
    							<li><a href="guangan10.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">天花工程</a></li>
    							<li><a href="guangan13.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">墙面工程</a></li>
    							<li><a href="guangan14.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">地面工程</a></li>
    							<li><a href="guangan15.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">厨房</a></li>
    							<li><a href="guangan16.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">卫生间、阳露台</a></li>
    							<li><a href="guangan17.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">电气工程</a></li>
    							<li><a href="guangan18.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">门窗细部工程</a></li>
    							<li><a href="guangan11.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">栏杆、扶手工程</a></li>
    							<li><a href="guangan12.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">电梯前室、首层大堂 </a></li>
    						</ul>
    					</li>   
    					
    					<li>
    						<a href="cxfx.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">评价</a>
    					</li>	   				
    				</ul>
    			</div>    			
    		</div>
    			<?php
						}
						$conn->close();
																	
					?><!--左侧导航菜单 -->
    		
    		<!-- 内容区域 -->
    		<div class="col-md-10">
    			<div id="xmdj" class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">砌筑工程</h3>
						</div>
	
							<div class="panel-body">
						<!-- Nav tabs -->
					
											<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation"><a href="#jbxx" role="tab" data-toggle="tab">基本信息</a></li>
									<!--<li role="presentation"><a href="#xjcd" role="tab" data-toggle="tab">新建测点</a></li>-->
									<li role="presentation"><a href="#scslsj" role="tab" data-toggle="tab">实测实量数据</a></li>
									<li role="presentation"><a href="#tjfx" role="tab" data-toggle="tab">统计分析</a></li>
								</ul>	
													<!-- Tab panes -->
													
								
						    <!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="jbxx">
															<p></p>
									
										<?php
										  require("../conn.php");
										  $zljcid=$_GET["zljcid"];
//										  $gcid1=$_GET["gcid"];
										  $yhid=$_GET["yhid"];
											$sql = "select * from 质量检查  where id='$zljcid' ";
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
														<input type="text" class="hidden" id="zljcsjc" name="zljcsjc" value="<?php echo $_GET["sjc"];?>">
														<input type="text" class="hidden" id="xmlb" name="xmlb" value="砌筑工程">
														<input type="text" class="hidden" id="sclb" name="sclb" value="实测实量">
														<input type="text" class="hidden" id="zljcid" name="zljcid" value="<?php echo $zljcid;?>">
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
									 <?php
											}
											$conn->close();	
									 ?>
										<div class="form-group">						
											<div class="col-sm-offset-3 col-sm-7">							
												<p class="help-block col-xs-12 col-md-6">附件上传</p>
												  <input type="file" name="file" id="file" value=""><br>
											<?php
											  require("../conn.php");
											  $zljcid=$_GET["zljcid"];
												$sql = "select * from 测点布置附件表  where 质量检查id='$zljcid' and 实测类别='实测实量' and 项目类别='砌筑工程' ";
												$result = $conn->query($sql);
												while($row = $result->fetch_assoc()) {
                      ?>
														<a href="../zjejsgs/upload/<?php echo $row["测点附件"];?>" target="_Blank">
															<img src="../zjejsgs/upload/<?php echo $row["测点附件"];?>" class="col-md-6" alt="查看附件" />
														</a>
											<?php
												}
												$conn->close();	
											?>
											</div>
										</div>
									<div class="modal-footer" >
									<input type="submit" class="btn btn-primary col-sm-offset-9" name="submit" value="保存">
	
					</div>
					</form>
				</div>
			<div role="tabpanel" class="tab-pane fade " id="xjcd">
									<p></p>      
				
								</div>
		<!--新建测点-->
		
		<!--实测实量数据-->
		<div role="tabpanel" class="tab-pane fade " id="scslsj">
			<div class="btn-group">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1" >
					<i class="glyphicon glyphicon-plus">新建测点</i>
				</button>
        <button type="button" class="btn btn-default"  onclick="javascript:window.open('cdbz/scbz1.php?id=<?php echo $_GET["zljcid"];?>&xmlb=<?php echo '砌筑工程' ?>&sclb=<?php echo '实测实量' ?>', 'newwindow2', 'height=470, width=1100, top=100, left=200,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no')">
        	测点布置                                                                                                                                                                                                                                   
        </button>
        
        <!--	by lwx-->
					<ul id="myTab" class="nav nav-tabs">
	        <li class="dropdown">
		<a href="#" id="myTabDrop1" class="dropdown-toggle" 
		   data-toggle="dropdown">测点类别筛选 <b class="caret"></b>
		</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" >
										<li class=""><a href="#cd"  tabindex="-1" data-toggle="tab">全部</a></li>
										<li class=""><a href="#cd1"  tabindex="-1" data-toggle="tab">表面平整度</a></li>
										<li class=""><a href="#cd2"  tabindex="-1" data-toggle="tab">外窗洞口尺寸</a></li>
										<li class=""><a href="#cd3"  tabindex="-1" data-toggle="tab">垂直度</a></li>
										<!--<li class=""><a href="#cd4"  tabindex="-1" data-toggle="tab">顶板水平度</a></li>
										<li class=""><a href="#cd5"  tabindex="-1" data-toggle="tab">楼板厚度</a></li>-->

									
									</ul>
									<li>
									</ul>
									
        
        
        
			</div>
				<p></p>
				
				
				<div class="tab-content">
				
				<div class="tab-pane fade in active " id="cd" >
			<form id="cdbcform" name="cdbcform"  method="post" class="form-horizontal" role="form" >    							
    							 <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
				   				 $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='砌筑工程' ";
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                   	 $xmlB = $row["测点类别"];
                   ?>
            <div class="form-group" id="ceshiyong">
								<label for="scz" class="col-sm-2 control-label">测点类别：</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" id="scz" name="scz" value="<?php echo $row["测点类别"];?>" >
									<input type="text" class="form-control hidden" id="cddid" name="cddid" value="<?php echo $row["id"];?>" >	
								</div>
								<label for="cdsl" class="col-sm-2 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="" name="" value="<?php echo $row["测点编号"];?>" >
								</div>
						
				           <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								   $sql1 = "select * from  建筑工程质量检测表  where  检查项目='砌筑工程' and 检查内容='$xmlB' ";
                   $result1 = $conn->query($sql1);
                   while($row2 = $result1->fetch_assoc()) {
                   	$ppbz = $row2["评判标准"];
					          $ppbz = explode('*',$row2["评判标准"]);
										}	
				            if ($row["测点实测值"]>$ppbz[0] && $row["测点实测值"]<$ppbz[1]){
                   ?>	
								<label for="cdsl" class="col-sm-2 control-label">测点实测值：</label>
								<?php 
								   } 
							   else {
								?>
								<label for="cdsl" class="col-sm-2 control-label" style="color:red">测点实测值：</label>
								<?php 
								   } 
								?>
								<div class="col-sm-2" id="ceshila">
										<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl1" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
										<input type="text" class="form-control hidden" id="" name="cdsl2" value="<?php echo $row["id"];?>" >	
								</div>
						</div>
				          <?php
										}
										$conn->close();					
									?>
									  <!--<input type="text" class="form-control hidden" id="celsjz" name="celsjz" value="1" >-->
								   <button id="cdbc" type="button" onclick="window.location.reload()" class="btn btn-primary col-sm-offset-10">
										保存
						</button>   
    						<!--</tbody>
    					</table>-->
    				
    				
				</form>
				</div>
				
				<div class="tab-pane fade " id="cd1" >
				
				<form id="cdbcform2" name="cdbcform"  method="post" class="form-horizontal active" role="form" >    							
    							 <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								    
								   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='砌筑工程' and 测点类别='表面平整度' ";
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                   $xmlB = $row["测点类别"];
                   ?>
            <div class="form-group" id="ceshiyong">
								<label for="scz" class="col-sm-2 control-label">测点类别：</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" id="scz" name="scz" value="<?php echo $row["测点类别"];?>" >
									<input type="text" class="form-control hidden" id="cddid" name="cddid" value="<?php echo $row["id"];?>" >	
								</div>
								<label for="cdsl" class="col-sm-2 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="" name="" value="<?php echo $row["测点编号"];?>" >
								</div>
						
				           <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								   $sql1 = "select * from  建筑工程质量检测表  where  检查项目='砌筑工程' and 检查内容='$xmlB' ";
                   $result1 = $conn->query($sql1);
                   while($row2 = $result1->fetch_assoc()) {
                   	$ppbz = $row2["评判标准"];
					          $ppbz = explode('*',$row2["评判标准"]);
										}	
				            if ($row["测点实测值"]>$ppbz[0] && $row["测点实测值"]<$ppbz[1]){
                   ?>	
								<label for="cdsl" class="col-sm-2 control-label">测点实测值：</label>
								<?php 
								   } 
							   else {
								?>
								<label for="cdsl" class="col-sm-2 control-label" style="color:red">测点实测值：</label>
								<?php 
								   } 
								?>
								<div class="col-sm-2" id="ceshila">
										<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl3" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
										<input type="text" class="form-control hidden" id="" name="cdsl4" value="<?php echo $row["id"];?>" >	
								</div>
						</div>
				          <?php
										}
										$conn->close();					
									?>
									  <!--<input type="text" class="form-control hidden" id="celsjz" name="celsjz" value="1" >-->
								   <button id="cdbc1" type="button" onclick="window.location.reload()" class="btn btn-primary col-sm-offset-10">
										保存
						</button>   
    						<!--</tbody>
    					</table>-->
    				
    				
				</form>
				
				</div>
				
				
				<div class="tab-pane fade " id="cd2" >
				
				<form id="cdbcform2" name="cdbcform"  method="post" class="form-horizontal active" role="form" >    							
    							 <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								    
								   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='砌筑工程' and 测点类别='外窗洞口尺寸' ";
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                   $xmlB = $row["测点类别"];
                   ?>
            <div class="form-group" id="ceshiyong">
								<label for="scz" class="col-sm-2 control-label">测点类别：</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" id="scz" name="scz" value="<?php echo $row["测点类别"];?>" >
									<input type="text" class="form-control hidden" id="cddid" name="cddid" value="<?php echo $row["id"];?>" >	
								</div>
								<label for="cdsl" class="col-sm-2 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="" name="" value="<?php echo $row["测点编号"];?>" >
								</div>
						
				           <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								   $sql1 = "select * from  建筑工程质量检测表  where  检查项目='砌筑工程' and 检查内容='$xmlB' ";
                   $result1 = $conn->query($sql1);
                   while($row2 = $result1->fetch_assoc()) {
                   	$ppbz = $row2["评判标准"];
					          $ppbz = explode('*',$row2["评判标准"]);
										}	
				            if ($row["测点实测值"]>$ppbz[0] && $row["测点实测值"]<$ppbz[1]){
                   ?>	
								<label for="cdsl" class="col-sm-2 control-label">测点实测值：</label>
								<?php 
								   } 
							   else {
								?>
								<label for="cdsl" class="col-sm-2 control-label" style="color:red">测点实测值：</label>
								<?php 
								   } 
								?>
								<div class="col-sm-2" id="ceshila">
										<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl5" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
										<input type="text" class="form-control hidden" id="" name="cdsl6" value="<?php echo $row["id"];?>" >	
								</div>
						</div>
				          <?php
										}
										$conn->close();					
									?>
									  <!--<input type="text" class="form-control hidden" id="celsjz" name="celsjz" value="1" >-->
								   <button id="cdbc2" type="button" onclick="window.location.reload()" class="btn btn-primary col-sm-offset-10">
										保存
						</button>   
    						<!--</tbody>
    					</table>-->
    				
    				
				</form>
				
				</div>
				
				
				<div class="tab-pane fade " id="cd3" >
				
				<form id="cdbcform2" name="cdbcform"  method="post" class="form-horizontal active" role="form" >    							
    							 <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								    
								   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='砌筑工程' and 测点类别='垂直度' ";
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                  $xmlB = $row["测点类别"];
                   ?>
            <div class="form-group" id="ceshiyong">
								<label for="scz" class="col-sm-2 control-label">测点类别：</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" id="scz" name="scz" value="<?php echo $row["测点类别"];?>" >
									<input type="text" class="form-control hidden" id="cddid" name="cddid" value="<?php echo $row["id"];?>" >	
								</div>
								<label for="cdsl" class="col-sm-2 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="" name="" value="<?php echo $row["测点编号"];?>" >
								</div>
						
				           <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								   $sql1 = "select * from  建筑工程质量检测表  where  检查项目='砌筑工程' and 检查内容='$xmlB' ";
                   $result1 = $conn->query($sql1);
                   while($row2 = $result1->fetch_assoc()) {
                   	$ppbz = $row2["评判标准"];
					          $ppbz = explode('*',$row2["评判标准"]);
										}	
				            if ($row["测点实测值"]>$ppbz[0] && $row["测点实测值"]<$ppbz[1]){
                   ?>	
								<label for="cdsl" class="col-sm-2 control-label">测点实测值：</label>
								<?php 
								   } 
							   else {
								?>
								<label for="cdsl" class="col-sm-2 control-label" style="color:red">测点实测值：</label>
								<?php 
								   } 
								?>
								<div class="col-sm-2" id="ceshila">
										<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl7" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
										<input type="text" class="form-control hidden" id="" name="cdsl8" value="<?php echo $row["id"];?>" >	
								</div>
						</div>
				          <?php
										}
										$conn->close();					
									?>
									  <!--<input type="text" class="form-control hidden" id="celsjz" name="celsjz" value="1" >-->
								   <button id="cdbc3" type="button" onclick="window.location.reload()" class="btn btn-primary col-sm-offset-10">
										保存
						</button>   
    						<!--</tbody>
    					</table>-->
				</form>
				</div>
				</div>
				</div>
				<div role="tabpanel" class="tab-pane fade " id="tjfx">
					 <?php
	           require("../conn.php");  
			   		 $zljcid=$_GET["zljcid"]; 
             $sql = "select 测点实测值 from 实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='砌筑工程' and 测点类别 = '表面平整度' ";      
	           $result = $conn->query($sql);
	           while($row = $result->fetch_assoc()) {
	         ?>
					   <input type="text" class="form-control hidden" name="cdsczpl" value="<?php echo $row["测点实测值"];?>" >
					<?php
						}
						$conn->close();					
					?>	
					<?php
	           require("../conn.php");  
			   		 $zljcid=$_GET["zljcid"]; 
             $sql = "select 测点实测值 from 实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='砌筑工程' and 测点类别 = '垂直度' ";      
	           $result = $conn->query($sql);
	           while($row = $result->fetch_assoc()) {
	         ?>
					   <input type="text" class="form-control hidden" name="qmpzd" value="<?php echo $row["测点实测值"];?>" >
					<?php
						}
						$conn->close();					
					?>
					<?php
	           require("../conn.php");  
             $sql = "select 测点实测值 from 实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='砌筑工程' and 测点类别 = '外窗洞口尺寸'";      
	           $result = $conn->query($sql);
	           while($row = $result->fetch_assoc()) {
	         ?>
					   <input type="text" class="form-control hidden" name="czdmmh" value="<?php echo $row["测点实测值"];?>" >
					<?php
						}
						$conn->close();					
					?>
					<div class="form-group col-sm-12" >
						<label for="cdlbA" class="col-sm-2 control-label">测点类别：</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="cdlbA" name="cdlbA" value="表面平整度" >
						</div>
						<label for="hgl" class="col-sm-2 control-label">合格率：</label>
						<div class="col-sm-2">
								<input type="text" class="form-control" id="hgl" name="hgl" value="" >
						</div>
					</div>
					<div class="form-group col-sm-12" >
						<label for="qbmpzd" class="col-sm-2 control-label">测点类别：</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="qbmpzd" name="qbmpzd" value="垂直度" >
						</div>
						<label for="hgl1" class="col-sm-2 control-label">合格率：</label>
						<div class="col-sm-2">
								<input type="text" class="form-control" id="hgl1" name="hgl1" value="" >
						</div>
					</div>
					<div class="form-group col-sm-12" >
						<label for="czdmm" class="col-sm-2 control-label">测点类别：</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="czdmm" name="czdmm" value="外窗洞口尺寸" >
						</div>
						<label for="hgl2" class="col-sm-2 control-label">合格率：</label>
						<div class="col-sm-2">
								<input type="text" class="form-control" id="hgl2" name="hgl2" value="" >
						</div>
					</div>
				</div>	
			</div>
		<!--实测实量数据-->
		
		<!--模态框-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						
						<div class="modal-dialog">
							
							
							<!--<form id="aqxcform" name="aqxcform" action="aqxcbc.php" method="post">-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">
										新建测点
									</h4>
								</div>
								<div class="modal-body">
						<form id="xjcdform" name="xjcdform" action="xjcdbc.php" method="post" class="form-horizontal" role="form" >
					<div class="form-group">
						<label for="cdlb" class="col-sm-3 control-label">测点类别：</label>
								<div class="col-sm-3">
											<select id="cdlb" name="cdlb" class="form-control">
												<?php
				                   require("../conn.php");   
								   				 $zljcid=$_GET["zljcid"];                
				                   $sql = "select distinct 检查内容 from  建筑工程质量检测表  where 检查项目='砌筑工程'";
				                   $result = $conn->query($sql);
				                   while($row = $result->fetch_assoc()) {
				                ?>
												<option><?php echo $row["检查内容"];?></option>
												<!--<option>垂直度</option>
												<option>外窗洞口尺寸</option>-->
												<?php
													}
													$conn->close();					
												?>
											</select>
											</div>
							<label for="cdsl" class="col-sm-3 control-label">测点数量：</label>
								<div class="col-sm-3">
										<input type="text" class="form-control" id="cdsl" name="cdsl" value="" placeholder="测点个数">
										<input type="text" class="form-control hidden" id="jzgcid" name="jzgcid" value="<?php echo $_GET["zljcid"];?>" >
								</div>
								<!--<label for="scz" class="col-sm-3 control-label">测点实测值：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="scz" name="scz" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
								</div>-->
						</div>
						<div class="form-group">
								
							
							
						</div>
						
						<div class="form-group ">
								
								<div class="col-sm-3 control-label">测点说明</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="6" id="nr"  name="nr"></textarea>
									
								</div>
								
								
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control hidden" id="xmlb" name="xmlb" value="砌筑工程" placeholder="">
									<input type="text" class="form-control hidden" id="gcid" name="gcid" value="<?php echo $_GET["gcid"];?>" placeholder="">
										<input type="text" class="hidden" id="zljcsjc" name="zljcsjc" value="<?php echo $_GET["sjc"];?>" >
							</div>									
								<div class="modal-footer" >
									<button type="button" class="btn btn-default " data-dismiss="modal">		
										<a href="scsl.php?id=<?php echo $yhid=$_GET["gcid"];?>&yhid=<?php echo $yhid=$_GET["yhid"]; ?>">
											返回上一层
						        </a>
						      </button>
									<button id="save3" type="button" onclick="window.location.reload()" class="btn btn-primary ">
										提交保存
									</button>
					      </div>
				   </form>
					
		
								
							</div><!-- /.modal-content -->
					<!--	</form>-->
						</div><!-- /.modal -->
					</div>
<!--模态框-->


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

  </body>
  <script type="text/javascript">
   
    jeDate({
		dateCell:"#jcrq",
		format:"YYYY-MM-DD",
		isinitVal:true,
		isTime:true, //isClear:false,
		minDate:"2014-09-19 00:00:00",
		okfun:function(val){alert(val)}
	})

    jeDate({
		dateCell:"#sgrq",
		format:"YYYY-MM-DD",
		isinitVal:true,
		isTime:true, //isClear:false,
		minDate:"2014-09-19 00:00:00",
		okfun:function(val){alert(val)}
	})
	</script>
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
		 $("#cdbc").click(function(){ 
					var cdsl1=document.getElementsByName("cdsl1");
					var cdsl2=document.getElementsByName("cdsl2");
//				$("#ceshila input[type='text']").each(function(){
////			    alert($(this).val());
//			  });
				var s = "";
				var sasa = "";
				for(var i=0;i<cdsl1.length;i++){
// 				if(cdsl1[i].value){
   					s+=cdsl1[i].value+'||'; //如果未选中，将value添加到变量s中
						sasa+=cdsl2[i].value+'||';
// 				} 
// 				else{
// 								alert ("出错");
// 				}
   		}
   			if(s==''){    							
   				alert("请填写实测值");    					
   			}else{    			 						
// 				alert(sasa);	
						$.ajax({
						 url:'cdbcaa.php',
						data:{
							s:s,
							sasa:sasa
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
								alert ("保存成功");
						}
					});
   			}
			});
			
			
			 $("#cdbc1").click(function(){ 
					var cdsl1=document.getElementsByName("cdsl3");
					var cdsl2=document.getElementsByName("cdsl4");
//				$("#ceshila input[type='text']").each(function(){
////			    alert($(this).val());
//			  });
				var s = "";
				var sasa = "";
				for(var i=0;i<cdsl1.length;i++){
// 				if(cdsl1[i].value){
   					s+=cdsl1[i].value+'||'; //如果未选中，将value添加到变量s中
						sasa+=cdsl2[i].value+'||';
// 				} 
// 				else{
// 								alert ("出错");
// 				}
   		}
   			if(s==''){    							
   				alert("请填写实测值");    					
   			}else{    			 						
// 				alert(sasa);	
						$.ajax({
						 url:'cdbcaa.php',
						data:{
							s:s,
							sasa:sasa
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
								alert ("保存成功");
						}
					});
   			}
			});
		
		
		 $("#cdbc2").click(function(){ 
					var cdsl1=document.getElementsByName("cdsl5");
					var cdsl2=document.getElementsByName("cdsl6");
//				$("#ceshila input[type='text']").each(function(){
////			    alert($(this).val());
//			  });
				var s = "";
				var sasa = "";
				for(var i=0;i<cdsl1.length;i++){
// 				if(cdsl1[i].value){
   					s+=cdsl1[i].value+'||'; //如果未选中，将value添加到变量s中
						sasa+=cdsl2[i].value+'||';
// 				} 
// 				else{
// 								alert ("出错");
// 				}
   		}
   			if(s==''){    							
   				alert("请填写实测值");    					
   			}else{    			 						
// 				alert(sasa);	
						$.ajax({
						 url:'cdbcaa.php',
						data:{
							s:s,
							sasa:sasa
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
								alert ("保存成功");
						}
					});
   			}
			});
			
			
			 $("#cdbc3").click(function(){ 
					var cdsl1=document.getElementsByName("cdsl7");
					var cdsl2=document.getElementsByName("cdsl8");
//				$("#ceshila input[type='text']").each(function(){
////			    alert($(this).val());
//			  });
				var s = "";
				var sasa = "";
				for(var i=0;i<cdsl1.length;i++){
// 				if(cdsl1[i].value){
   					s+=cdsl1[i].value+'||'; //如果未选中，将value添加到变量s中
						sasa+=cdsl2[i].value+'||';
// 				} 
// 				else{
// 								alert ("出错");
// 				}
   		}
   			if(s==''){    							
   				alert("请填写实测值");    					
   			}else{    			 						
// 				alert(sasa);	
						$.ajax({
						 url:'cdbcaa.php',
						data:{
							s:s,
							sasa:sasa
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
								alert ("保存成功");
						}
					});
   			}
			});
			 $("#cdlb").click(function(){ 
			 	
			 	var cdlb=document.getElementById("cdlb").value;
			 	if(cdlb=="表面平整度"){
			 		document.getElementById("nr").value='同一户选取2个墙面（1）每一面墙作为1个实测区，优先选取有门窗、过道洞口的墙面，测量部位选取正手墙面，累计实测实量10 个实测区。（2）当墙面长度小于3米，各墙面顶部和根部4个角中，取左上及右下2个角。按45度角斜放靠尺分别测量2次，其实测值作为判断该实测指标合格率的2个计算点。（3）当墙面长度大于3米时，还需在墙长度中间位置增加1次水平测量，3 次测量值均作为判断该实测指标合格率的3 个计算点。（4）墙面有门窗、过道洞口的，在各洞口45度斜交测一次，作为新增实测指标合格率的1个计算点。';
			 		$("#cdsl").val("30")
			 	}
			 	else if	(cdlb=="外窗洞口尺寸"){
			 		document.getElementById("nr").value='同一户选取2个外窗（1）对于平外墙面的外窗洞口：同一外窗洞口均可作为1个实测区，累计实测实量10 个实测区。（2）测量时不包括抹灰收口厚度，以砌体边对边，各测量2次外窗洞口宽度及高度净尺寸，取高度或宽度的2个实测值与设计值间的偏差最大值，作为判断高度或宽度实测指标合格率的1 个计算点。';
			 		$("#cdsl").val("40")
			 		
			 	}
			 	else if	(cdlb=="垂直度"){
			 		document.getElementById("nr").value='同一户选取2个墙面（1）每一面墙都可以作为1个实测区，优先选用有门窗、过道洞口的墙面，测量部位选取正手墙面，累计实测实量10 个实测区。（2）测量时应避开墙顶梁、墙底灰砂砖或砼反坎、墙体斜顶砖，消除其测量值的影响，如两米靠尺过高不易定位，可采用1米靠尺。（3）当墙长度小于3米时，同一面墙距两侧阴阳角约30cm 位置，分别按以下原则实测2次：一是靠尺顶端接触到上部砌体位置时测1次垂直度，二是靠尺底端距离下部地面位置约30cm 时测1次垂直度。墙体洞口一侧为垂直度必测部位。这2个实测值分别作为判断该实测指标合格率的2个计算点。（4）当墙长度大于3米时，同一面墙距两端头竖向阴阳角约30cm 和墙体中间位置，分别按以下原则实测3次：一是靠尺顶端接触到上部砌体位置时测1次垂直度，二是靠尺底端距离下部地面位置约30cm 时测1次垂直度，三是在墙长度中间位置靠尺基本在高度方向居中时测1 次垂直度。这3个测量值分别作为判断该实测指标合格率的3个计算点。';
			 		$("#cdsl").val("30")
			 		
			 	}
			 
			 	
			 	
			 	
			 	
			});
		//			************截面********************//
			var cdsczpl = document.getElementsByName('cdsczpl');
      var s = 0;
			for(var i=0;i<30;i++){
				if(cdsczpl[i].value<8 && cdsczpl[i].value>0){
					s=s+1;
				}
   	};
			var jgdy = s/30*100;
   		var hgl = document.getElementById('hgl');
   		hgl.value = jgdy+'%';
//			************墙表面平整度********************//
		  var qmpzd = document.getElementsByName('qmpzd');
      var s1 = 0;
			for(var i=0;i<30;i++){
				if(qmpzd[i].value<5 && qmpzd[i].value>0){
					s1=s1+1;
				}
				else{
					s1 =s1;
				}
   	};
			var jgdy1 = s1/30*100;
   		var hgl1 = document.getElementById('hgl1');
   		hgl1.value = jgdy1+'%';
//			************垂直度（免抹灰）********************//
      var czdmmh = document.getElementsByName('czdmmh');
      var s2 = 0;
			for(var i=19;i<40;i++){
				if(czdmmh[i].value<15 && czdmmh[i].value>-5){
					s2=s2+1;
				}
   	};
			var jgdy2 = s2/20*100;
   		var hgl2 = document.getElementById('hgl2');
   		hgl2.value = jgdy2+'%';	
		//***********************算本项目合格率*****************//  
   		var hnthelpj =(jgdy+jgdy1+jgdy2)/3+'%';
      var zljcid1 = document.getElementById('zljcid').value;
      var gcid = document.getElementById('gcid').value;
      var zljcsjc = document.getElementById('zljcsjc').value;
			$.ajax({
						 url:'hglbc.php',
						data:{
							hnthelpj:hnthelpj,
							xmlba:'建筑砌筑工程',
							zljcid:zljcid1,
							gcid:gcid,
							sjc:zljcsjc,
							scgglb:'实测实量'
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
						}
					}); 		
</script>
	<script type="text/javascript"src="../js/jquery.validate.min.js"></script>
</html>

