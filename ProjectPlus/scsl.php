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
    							<li class="active"><a href="scsl.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">混凝土结构工程</a></li>
    							<li><a href="scsl1.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">砌筑工程</a></li>
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
							<h3 class="panel-title">混凝土结构工程</h3>
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
														<input type="text" class="hidden" id="xmlb" name="xmlb" value="混凝土结构工程">
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
												$sql = "select * from 测点布置附件表  where 质量检查id='$zljcid' and 实测类别='实测实量' and 项目类别='混凝土结构工程' ";
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
				<!--<div id="" class="form-group">-->
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1" >
						<i class="glyphicon glyphicon-plus">新建测点</i>
					</button>
	        <button type="button" class="btn btn-default"  onclick="javascript:window.open('cdbz/scbz.php?id=<?php echo $_GET["zljcid"];?>&xmlb=<?php echo '混凝土结构工程' ?>&sclb=<?php echo '实测实量' ?>', 'newwindow2', 'height=470, width=1100, top=100, left=200,toolbar=no, menubar=no, scrollbars=yes, resizable=no, location=no, status=no')">
	        	测点布置                                                                                                                                                                                                                                   
	        </button>
	        
					<!--<input class="" id="sxzyc" value="" />-->
					<!--<input type="submit" class="btn btn-default" name="tjsx" id="tjsx" value="查询" />-->
					<!--<button id="bcsave" class="btn btn-default" name="tjsx" id="tjsx">查询</button>
					</button>
					-->
					
				<!--	by lwx-->
					<ul id="myTab" class="nav nav-tabs">
	        <li class="dropdown">
						<a href="#" id="myTabDrop1" class="dropdown-toggle" 
						   data-toggle="dropdown">测点类别筛选 <b class="caret"></b>
						</a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" >
							<li class=""><a href="#cd"  tabindex="-1" data-toggle="tab">全部</a></li>
							<li class=""><a href="#cd1"  tabindex="-1" data-toggle="tab">截面尺寸</a></li>
							<li class=""><a href="#cd2"  tabindex="-1" data-toggle="tab">墙表面平整度</a></li>
							<li class=""><a href="#cd3"  tabindex="-1" data-toggle="tab">垂直度</a></li>
							<li class=""><a href="#cd4"  tabindex="-1" data-toggle="tab">顶板水平度</a></li>
							<li class=""><a href="#cd5"  tabindex="-1" data-toggle="tab">楼板厚度</a></li>
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
								   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' ";
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
								<label for="bh" class="col-sm-2 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="bh" name="bh" value="<?php echo $row["测点编号"];?>" >
								</div>
								 
				           <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								   $sql1 = "select * from  建筑工程质量检测表  where  检查项目='混凝土结构工程' and 检查内容='$xmlB' ";
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
										<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl11" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
										<input type="text" class="form-control hidden" id="" name="cdsl22" value="<?php echo $row["id"];?>" >	
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
								    
								   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' and 测点类别='截面尺寸' ";
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
								<label for="bh" class="col-sm-2 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="bh" name="bh" value="<?php echo $row["测点编号"];?>" >
								</div>
								 
				           <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								   $sql1 = "select * from  建筑工程质量检测表  where  检查项目='混凝土结构工程' and 检查内容='$xmlB' ";
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
										<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl12" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
										<input type="text" class="form-control hidden" id="" name="cdsl23" value="<?php echo $row["id"];?>" >	
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
								    
								   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' and 测点类别='墙表面平整度' ";
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
								<label for="bh" class="col-sm-2 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="bh" name="bh" value="<?php echo $row["测点编号"];?>" >
								</div>
								 
				           <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								   $sql1 = "select * from  建筑工程质量检测表  where  检查项目='混凝土结构工程' and 检查内容='$xmlB' ";
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
										<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl13" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
										<input type="text" class="form-control hidden" id="" name="cdsl24" value="<?php echo $row["id"];?>" >	
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
								   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' and 测点类别 LIKE '%垂直度%' ";
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
								<label for="bh" class="col-sm-2 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="bh" name="bh" value="<?php echo $row["测点编号"];?>" >
								</div>
								 
				           <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								   $sql1 = "select * from  建筑工程质量检测表  where  检查项目='混凝土结构工程' and 检查内容='$xmlB' ";
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
										<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl14" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
										<input type="text" class="form-control hidden" id="" name="cdsl25" value="<?php echo $row["id"];?>" >	
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
				
				
				<div class="tab-pane fade " id="cd4" >
				
				<form id="cdbcform2" name="cdbcform"  method="post" class="form-horizontal active" role="form" >    							
    							 <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								    
								   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' and 测点类别='顶板水平度' ";
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
								<label for="bh" class="col-sm-2 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="bh" name="bh" value="<?php echo $row["测点编号"];?>" >
								</div>
								 
				           <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								   $sql1 = "select * from  建筑工程质量检测表  where  检查项目='混凝土结构工程' and 检查内容='$xmlB' ";
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
										<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl15" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
										<input type="text" class="form-control hidden" id="" name="cdsl26" value="<?php echo $row["id"];?>" >	
								</div>
						</div>
				          <?php
										}
										$conn->close();					
									?>
									  <!--<input type="text" class="form-control hidden" id="celsjz" name="celsjz" value="1" >-->
								   <button id="cdbc4" type="button" onclick="window.location.reload()" class="btn btn-primary col-sm-offset-10">
										保存
						</button>   
    						<!--</tbody>
    					</table>-->
    				
    				
				</form>
				
				</div>
				
				
				<div class="tab-pane fade " id="cd5" >
				
				<form id="cdbcform2" name="cdbcform"  method="post" class="form-horizontal active" role="form" >    							
    							 <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								    
								   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' and 测点类别='楼板厚度' ";
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
								<label for="bh" class="col-sm-2 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" id="bh" name="bh" value="<?php echo $row["测点编号"];?>" >
								</div>
								 
				           <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								   $sql1 = "select * from  建筑工程质量检测表  where  检查项目='混凝土结构工程' and 检查内容='$xmlB' ";
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
										<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl16" value="<?php echo $row["测点实测值"];?>" placeholder="测点实测值">
										<input type="text" class="form-control hidden" id="" name="cdsl27" value="<?php echo $row["id"];?>" >	
								</div>
						</div>
				          <?php
										}
										$conn->close();					
									?>
									  <!--<input type="text" class="form-control hidden" id="celsjz" name="celsjz" value="1" >-->
								   <button id="cdbc5" type="button" onclick="window.location.reload()" class="btn btn-primary col-sm-offset-10">
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
//							   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' ";
             $sql = "select 测点实测值 from 实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' and 测点类别 = '截面尺寸' order by CONVERT(测点实测值,SIGNED) desc ";      
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
//							   $sql = "select * from  实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' ";
             $sql = "select 测点实测值 from 实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' and 测点类别 = '墙表面平整度' order by CONVERT(测点实测值,SIGNED) desc ";      
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
             $sql = "select 测点实测值 from 实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' and 测点类别 = '垂直度（免抹灰）' order by CONVERT(测点实测值,SIGNED) desc ";      
	           $result = $conn->query($sql);
	           while($row = $result->fetch_assoc()) {
	         ?>
					   <input type="text" class="form-control hidden" name="czdmmh" value="<?php echo $row["测点实测值"];?>" >
					<?php
						}
						$conn->close();					
					?>
					<?php
	           require("../conn.php");  
             $sql = "select 测点实测值 from 实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' and 测点类别 = '垂直度（抹灰）' order by CONVERT(测点实测值,SIGNED) desc ";      
	           $result = $conn->query($sql);
	           while($row = $result->fetch_assoc()) {
	         ?>
					   <input type="text" class="form-control hidden" name="czdmh" value="<?php echo $row["测点实测值"];?>" >
					<?php
						}
						$conn->close();					
					?>
					
					<div class="form-group col-sm-12" >
						<label for="cdlbA" class="col-sm-2 control-label">测点类别：</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="cdlbA" name="cdlbA" value="截面尺寸" >
						</div>
						<label for="hgl" class="col-sm-2 control-label">合格率：</label>
						<div class="col-sm-2">
								<input type="text" class="form-control" id="hgl" name="hgl" value="" >
						</div>
					</div>
					<div class="form-group col-sm-12" >
						<label for="qbmpzd" class="col-sm-2 control-label">测点类别：</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="qbmpzd" name="qbmpzd" value="墙表面平整度" >
						</div>
						<label for="hgl1" class="col-sm-2 control-label">合格率：</label>
						<div class="col-sm-2">
								<input type="text" class="form-control" id="hgl1" name="hgl1" value="" >
						</div>
					</div>
					<div class="form-group col-sm-12" >
						<label for="czdmm" class="col-sm-2 control-label">测点类别：</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="czdmm" name="czdmm" value="垂直度（免抹灰）" >
						</div>
						<label for="hgl2" class="col-sm-2 control-label">合格率：</label>
						<div class="col-sm-2">
								<input type="text" class="form-control" id="hgl2" name="hgl2" value="" >
						</div>
					</div>
					<div class="form-group col-sm-12" >
						<label for="czdm" class="col-sm-2 control-label">测点类别：</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="czdm" name="czdm" value="垂直度（抹灰）" >
						</div>
						<label for="hgl3" class="col-sm-2 control-label">合格率：</label>
						<div class="col-sm-2">
								<input type="text" class="form-control" id="hgl3" name="hgl3" value="" >
						</div>
					</div>
					<?php
	           require("../conn.php");  
             $sql = "select 测点实测值 from 实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' and 测点类别 = '顶板水平度' order by CONVERT(测点实测值,SIGNED) desc ";      
	           $result = $conn->query($sql);
	           while($row = $result->fetch_assoc()) {
	         ?>
					   <input type="text" class="form-control hidden" name="dbdpd" value="<?php echo $row["测点实测值"];?>" >
					<?php
						}
						$conn->close();					
					?>
					<div class="form-group col-sm-12" >
						<label for="dbsp" class="col-sm-2 control-label">测点类别：</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="dbsp" name="dbsp" value="顶板水平度" >
						</div>
						<label for="hgl4" class="col-sm-2 control-label">合格率：</label>
						<div class="col-sm-2">
								<input type="text" class="form-control" id="hgl4" name="hgl4" value="" >
						</div>
					</div>
					<?php
	           require("../conn.php");  
             $sql = "select 测点实测值 from 实测实量新建测点 where 质量检查id='$zljcid' and 项目类别='混凝土结构工程' and 测点类别 = '楼板厚度' order by CONVERT(测点实测值,SIGNED) desc ";      
	           $result = $conn->query($sql);
	           while($row = $result->fetch_assoc()) {
	         ?>
					   <input type="text" class="form-control hidden" name="lbhd" value="<?php echo $row["测点实测值"];?>" >
					<?php
						}
						$conn->close();					
					?>
					<div class="form-group col-sm-12" >
						<label for="lbhh" class="col-sm-2 control-label">测点类别：</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="lbhh" name="lbhh" value="楼板厚度" >
						</div>
						<label for="hgl5" class="col-sm-2 control-label">合格率：</label>
						<div class="col-sm-2">
								<input type="text" class="form-control" id="hgl5" name="hgl5" value="" >
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
											<option> </option>
												<option>截面尺寸</option>
												<option>墙表面平整度</option>
													<option>垂直度（免抹灰）</option>
												<option>垂直度（抹灰）</option>
												<option>顶板水平度</option>
												<option>楼板厚度</option>
											</select>
											</div>
						<label for="cdsl" class="col-sm-3 control-label">测点数量：</label>
								<div class="col-sm-3">
										<input type="text" class="form-control" id="cdsl" name="cdsl"  placeholder="测点个数">
										<input type="text" class="form-control hidden" id="jzgcid" name="jzgcid" value="<?php echo $_GET["zljcid"];?>" >
								</div>
								
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
								<input type="text" class="form-control hidden" id="xmlb" name="xmlb" value="混凝土结构工程" placeholder="">
									<input type="text" class="hidden" id="gcid" name="gcid" value="<?php echo $_GET["gcid"];?>" >
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
			$("#bcsave").click(function(){ 
				var cdlb1 = document.getElementById('cdlb1').value;
				$.ajax({
								 url:'scsl.php',
								data:{
									cdlb1:cdlb1,
								},
								dataType:'json',
								type:'post',
								timeout:10000,
								success:function(data){
//									alert(data);
										 alert('保存成功');
								},
								error:function(xhr,type,errorThrown){
									//异常处理；
		//							alert('ajax错误'+type);
		//							return callback('ajax错误'+type+errorThrown);
//										alert ("保存成功");
								}
							});
			});
		 $("#cdbc").click(function(){ 
					var cdsl1=document.getElementsByName("cdsl11");
					var cdsl2=document.getElementsByName("cdsl22");
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
					var cdsl1=document.getElementsByName("cdsl12");
					var cdsl2=document.getElementsByName("cdsl23");
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
					var cdsl1=document.getElementsByName("cdsl13");
					var cdsl2=document.getElementsByName("cdsl24");
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
					var cdsl1=document.getElementsByName("cdsl14");
					var cdsl2=document.getElementsByName("cdsl25");
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
			$("#cdbc4").click(function(){ 
					var cdsl1=document.getElementsByName("cdsl15");
					var cdsl2=document.getElementsByName("cdsl26");
				var s = "";
				var sasa = "";
				for(var i=0;i<cdsl1.length;i++){
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
			$("#cdbc5").click(function(){ 
					var cdsl1=document.getElementsByName("cdsl16");
					var cdsl2=document.getElementsByName("cdsl27");
				var s = "";
				var sasa = "";
				for(var i=0;i<cdsl1.length;i++){
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
			
//		<--	BY Lwx-->
			 $("#cdlb").click(function(){ 
			 	
			 	var cdlb=document.getElementById("cdlb").value;
			 	if(cdlb=="截面尺寸"){
			 		document.getElementById("nr").value='同一户选取有砌筑墙体4个墙/柱面（1）同一墙/柱面作为1个实测区，累计实测实量20 个实测区。（2）每个实测区从地面向上300mm 和1500mm 各测量截面尺寸1 次，选取其中与设计尺寸偏差最大的数，作为判断该实测指标合格率的1个计算点。说明：实测20个测区，取40个实测值，每个测区取偏差最大值，剔除最小值后最终取20个值。';
			 		$("#cdsl").val("40");
			 		
			 	}
			 	else if	(cdlb=="墙表面平整度"){
			 		document.getElementById("nr").value='同一户选取4个墙/柱面（1）剪力墙/暗柱：选取长边墙，任选长边墙两面中的一面作为1个实测区，累计实测实量20 个实测区。（2）当所选墙长度小于3米时，同一面墙4个角（顶部及根部）中取左上及右下2个角。按45 度角斜放靠尺，累计测2次表面平整度。跨洞口部位必测。每个实测值分别作为该指标合格率的1个计算点。（3）当所选墙长度大于3米时，除按45度角斜放靠尺测量两次表面平整度外，还需在墙长度中间水平放靠尺测量1 次表面平整度。跨洞口部位必测。每个实测值分别作为判断该指标合格率的1个计算点。（4） 砼柱：可以不测表面平整度。说明：取20个测区，每个测区取3个实测点，合计60个点。最终取60个实测值。';
			 		$("#cdsl").val("60");
			 		
			 	}
			 	else if	(cdlb=="垂直度（免抹灰）"){
			 		document.getElementById("nr").value='同一户选取4个墙/柱面（1)剪力墙：任取长边墙的一面作为1个实测区，累计实测实量20 个实测区。（2)当墙长度小于3米时，同一面墙距两端头竖向阴阳角约30cm位置，分别按以下原则实测2次：一是靠尺顶端接触到上部砼顶板位置时测1次垂直度，二是靠尺底端接触到下部地面位置时测1次垂直度。砼墙体洞口一侧为垂直度必测部位。每个实测值分别作为判断该实测指标合格率的1个计算点。（3）当墙长度大于3 米时，同一面墙距两端头竖向阴阳角约30cm和墙中间位置，分别按以下原则实测3 次：一是靠尺顶端接触到上部砼顶板位置时测1次垂直度，二是靠尺底端接触到下部地面位置时测1次垂直度，三是在墙长度中间位置靠尺基本在高度方向居中时测1次垂直度。砼墙体洞口一侧为垂直度必测部位。每个实测值分别作为判断该实测指标合格率的1个计算点。（4） 砼柱：任选砼柱四面中的两面，分别将靠尺顶端接触到上部砼顶板和下部地面位时各测1次垂直度。这2个实测值分别作为判断该实测指标合格率的2 个计算点。说明：按照抹灰和免抹灰两种情况处理。取20个测区，每个测区取3个实测点，合计60个点。最终取60个实测值。';
			 		$("#cdsl").val("60")
			 	}
			 	
			 		else if	(cdlb=="垂直度（抹灰）"){
			 		document.getElementById("nr").value='同一户选取4个墙/柱面（1)剪力墙：任取长边墙的一面作为1个实测区，累计实测实量20 个实测区。（2)当墙长度小于3米时，同一面墙距两端头竖向阴阳角约30cm位置，分别按以下原则实测2次：一是靠尺顶端接触到上部砼顶板位置时测1次垂直度，二是靠尺底端接触到下部地面位置时测1次垂直度。砼墙体洞口一侧为垂直度必测部位。每个实测值分别作为判断该实测指标合格率的1个计算点。（3）当墙长度大于3 米时，同一面墙距两端头竖向阴阳角约30cm和墙中间位置，分别按以下原则实测3 次：一是靠尺顶端接触到上部砼顶板位置时测1次垂直度，二是靠尺底端接触到下部地面位置时测1次垂直度，三是在墙长度中间位置靠尺基本在高度方向居中时测1次垂直度。砼墙体洞口一侧为垂直度必测部位。每个实测值分别作为判断该实测指标合格率的1个计算点。（4） 砼柱：任选砼柱四面中的两面，分别将靠尺顶端接触到上部砼顶板和下部地面位时各测1次垂直度。这2个实测值分别作为判断该实测指标合格率的2 个计算点。说明：按照抹灰和免抹灰两种情况处理。取20个测区，每个测区取3个实测点，合计60个点。最终取60个实测值。';
			 		$("#cdsl").val("60")
			 		
			 	}
			 	else if	(cdlb=="顶板水平度"){
			 		document.getElementById("nr").value='同一户选取2个跨板（客厅及任意一个卧室）（1）同一功能房间砼顶板作为1个实测区，累计实测实量 10 个实测区。（2）使用激光扫平仪，在实测板跨内打出一条水平基准线。同一实测区距顶板天花线约30cm处位置选取4个角点，以及板跨几何中心位（若板单侧跨度较大可在中心部位增加1个测点），分别测量砼顶板与水平基准线之间的5 个垂直距离。以最低点为基准点，计算另外四点与最低点之间的偏差。偏差值≤15mm 时实测点合格；最大偏差值≤20mm 时，5个偏差值（基准点偏差值以0 计）的实际值作为判断该实测指标合格率的5个计算点。最大偏差值﹥20mm 时，5 个偏差值均按最大偏差值计，作为判断该实测指标合格率的5个计算点。';
			 		
			 		$("#cdsl").val("50")
			 	}
			 	else if	(cdlb=="楼板厚度"){
			 		document.getElementById("nr").value='同一户选取2个跨板（客厅及任意一个卧室）（1）同一跨板作为1个实测区，累计实测实量10 个实测区。每个实测区取1个样本点，取点位置为该板短跨1/2交长跨1/3的部位。（2）当采用破损法测量时，可用电钻在板中钻孔（需特别注意避开预埋电线管等），以卷尺测量孔眼厚度。1 个实测值作为判断该实测指标合格率的1个计算点。';
			 		$("#cdsl").val("10")
			 	}
			 	
			 	
			 	
			 	
			});
//			************截面********************//
			var cdsczpl = document.getElementsByName('cdsczpl');
      var s = 0;
			for(var i=10;i<30;i++){
				if(cdsczpl[i].value<8 && cdsczpl[i].value>-5){
					s=s+1;
				}
   	};
			var jgdy = s/20*100;
   		var hgl = document.getElementById('hgl');
   		
   		
   		hgl.value = jgdy+'%';
//			************墙表面平整度********************//
		  var qmpzd = document.getElementsByName('qmpzd');
      var s1 = 0;
			for(var i=0;i<60;i++){
				if(qmpzd[i].value<8 && qmpzd[i].value>0){
					s1=s1+1;
				}
				else{
					s1 =s1;
				}
   	};
			var jgdy1 = s1/60*100;
   		var hgl1 = document.getElementById('hgl1');
   		hgl1.value = jgdy1+'%';
//			************垂直度（免抹灰）********************//
      var czdmmh = document.getElementsByName('czdmmh');
      var s2 = 0;
			for(var i=0;i<60;i++){
				if(czdmmh[i].value<5 && czdmmh[i].value>0){  
					s2=s2+1;
				}
   	};
			var jgdy2 = s2/60*100;
   		var hgl2 = document.getElementById('hgl2');
   		hgl2.value = jgdy2+'%';
//			************垂直度（抹灰）********************//
      var czdmh = document.getElementsByName('czdmh');
      var s3 = 0;
			for(var i=0;i<60;i++){
				if(czdmh[i].value<8 && czdmh[i].value>0){
					s3=s3+1;
				}
   	};
			var jgdy3 = s3/60*100;
   		var hgl3 = document.getElementById('hgl3');
   		hgl3.value = jgdy3+'%';
//			************顶板水平度********************//
      var dbdpd = document.getElementsByName('dbdpd');
      var s4 = 0;
			for(var i=0;i<50;i++){
				if(dbdpd[i].value<8 && dbdpd[i].value>0){
					s4=s4+1;
				}
   	};
			var jgdy4 = s4/50*100;
   		var hgl4 = document.getElementById('hgl4');
   		hgl4.value = jgdy4+'%';  
//			************楼板厚度********************//
      var lbhd = document.getElementsByName('lbhd');
      var s5 = 0;
			for(var i=0;i<10;i++){
				if(lbhd[i].value<8 && lbhd[i].value>-5){
					s5=s5+1;
				}
   	};
			var jgdy5 = s5/10*100;
   		var hgl5 = document.getElementById('hgl5');
   		hgl5.value = jgdy5+'%';
//***********************算本项目合格率*****************//  
   		var hnthelpj =(jgdy+jgdy1+jgdy2+jgdy3+jgdy4+jgdy5)/6+'%';
      var zljcid1 = document.getElementById('zljcid').value;
      var gcid = document.getElementById('gcid').value;
      var zljcsjc = document.getElementById('zljcsjc').value;
			$.ajax({
						 url:'hglbc.php',
						data:{
							hnthelpj:hnthelpj,
							xmlba:'混凝土结构工程',
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

