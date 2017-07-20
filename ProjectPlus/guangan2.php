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
    							<li  class="active"><a href="scsl.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">混凝土结构工程</a></li>
    							<li><a href="scsl1.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">砌筑工程</a></li>
    							<li><a href="scsl2.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">抹灰工程</a></li>
    							<li><a href="scsl3.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">设备安装工程</a></li>
    							</br>
    						
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
    							</br>
    							
    						</ul>
    					</li>  
    					  					 					
    					<li><b style="margin-left:20px;">观感</b>
    						<a   href="guangan1.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">建筑工程</a>
    						<ul class="nav">
    							<li><a href="guangan1.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">混凝土工程</a></li>
    							<li   class="active"><a href="guangan2.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">砌体工程</a></li>
    							<li><a href="guangan3.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">内墙抹灰工程</a></li>
    							<li><a href="guangan4.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">外墙防水工程</a></li>
    							<li><a href="guangan5.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">门窗工程</a></li>
    							<li><a href="guangan6.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">卫生间、沉箱工程</a></li>
    							<li><a href="guangan7.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">水电安装工程</a></li>
    							<li><a href="guangan8.php?gcid=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>&zljcid=<?php echo $_GET["zljcid"];?>&sjc=<?php echo $_GET["sjc"];?>">屋面及楼地面工程</a></li>
    							</br>
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
    							</br>
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
		<h3 class="panel-title">砌体工程</h3>
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
														<input type="text" class="hidden" id="xmlb" name="xmlb" value="砌体工程">
														<input type="text" class="hidden" id="sclb" name="sclb" value="观感评价">
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
												$sql = "select * from 测点布置附件表  where 质量检查id='$zljcid' and 实测类别='观感评价' and 项目类别='砌体工程'  ";
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
        <button type="button" class="btn btn-default"  onclick="javascript:window.open('cdbz/ggbz2.php?id=<?php echo $_GET["zljcid"];?>&xmlb=<?php echo '砌体工程'?>&sclb=<?php echo '观感评价'?>', 'newwindow2', 'height=470, width=1100, top=100, left=200,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no')">
        	测点布置
        </button>
			</div>
				<p></p>
				<ul id="myTab" class="nav nav-tabs">
	        <li class="dropdown">
		<a href="#" id="myTabDrop1" class="dropdown-toggle" 
		   data-toggle="dropdown">测点类别筛选 <b class="caret"></b>
		</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" >
										<li class=""><a href="#cd"  tabindex="-1" data-toggle="tab">全部</a></li>
										<li class=""><a href="#cd1"  tabindex="-1" data-toggle="tab">工艺要求</a></li>
										<li class=""><a href="#cd2"  tabindex="-1" data-toggle="tab">观感质量</a></li>
										
										</ul>
									<li>
									</ul>
									
									
				
		
			<p></p>
			
			<div class="tab-content">
				
				<div class="tab-pane fade in active " id="cd" >
			<form id="cdbcform" name="cdbcform"  method="post" class="form-horizontal" role="form" >    							
    							 <?php
                   require("../conn.php");  
				   				 error_reporting(E_ALL ^ E_NOTICE);	 
				   				 $zljcid=$_GET["zljcid"]; 
								  
					
								   	 $sql = "select * from  观感评价新建测点 where 质量检查id='$zljcid' and 项目类别='砌体工程' ";
				
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                   ?>
             <div class="form-group" id="ceshiyong">
								<label for="scz" class="col-sm-3 control-label">测点类别：</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" readonly="readonly" id="scz" name="scz" value="<?php echo $row["测点类别"];?>" >
									<input type="text" class="form-control hidden" id="cddid" name="cddid" value="<?php echo $row["id"];?>" >	
								</div>
								<label for="cdlx" class="col-sm-3 control-label" >测点类型：</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" readonly="readonly" id="cdlx" name="cdlx" value="<?php echo $row["测点类型"];?>" >
								</div>
								<label for="cdsl" class="col-sm-3 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" readonly="readonly" id="" name="" value="<?php echo $row["测点编号"];?>" >
								</div>
								<label for="cdsl" class="col-sm-3 control-label">观感评价：</label>
								<div class="col-sm-2" id="ceshila">
										<select id="<?php echo $row["测点编号"];?>" name="cdsl1" class="form-control">
												<option><?php echo $row["观感评价"];?></option>
												<option>√</option>
												<option>×</option>
										</select>
										<!--<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl1" value="<?php echo $row["观感评价"];?>" placeholder="测点实测值">-->
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
								    
								   $sql = "select * from  观感评价新建测点 where 质量检查id='$zljcid' and 项目类别='砌体工程' and 测点类别='工艺要求' ";
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                   ?>
              <div class="form-group" id="ceshiyong">
								<label for="scz" class="col-sm-3 control-label">测点类别：</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" readonly="readonly" id="scz" name="scz" value="<?php echo $row["测点类别"];?>" >
									<input type="text" class="form-control hidden" id="cddid" name="cddid" value="<?php echo $row["id"];?>" >	
								</div>
								<label for="cdlx" class="col-sm-3 control-label" >测点类型：</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" readonly="readonly" id="cdlx" name="cdlx" value="<?php echo $row["测点类型"];?>" >
								</div>
								<label for="cdsl" class="col-sm-3 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" readonly="readonly" id="" name="" value="<?php echo $row["测点编号"];?>" >
								</div>
								<label for="cdsl" class="col-sm-3 control-label">观感评价：</label>
								<div class="col-sm-2" id="ceshila">
										<select id="<?php echo $row["测点编号"];?>" name="cdsl3" class="form-control">
												<option><?php echo $row["观感评价"];?></option>
												<option>√</option>
												<option>×</option>
										</select>
										<!--<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl1" value="<?php echo $row["观感评价"];?>" placeholder="测点实测值">-->
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
								    
								   $sql = "select * from  观感评价新建测点 where 质量检查id='$zljcid' and 项目类别='砌体工程' and 测点类别='观感质量' ";
                   $result = $conn->query($sql);
                   while($row = $result->fetch_assoc()) {
                   ?>
              <div class="form-group" id="ceshiyong">
								<label for="scz" class="col-sm-3 control-label">测点类别：</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" readonly="readonly" id="scz" name="scz" value="<?php echo $row["测点类别"];?>" >
									<input type="text" class="form-control hidden" id="cddid" name="cddid" value="<?php echo $row["id"];?>" >	
								</div>
								<label for="cdlx" class="col-sm-3 control-label" >测点类型：</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" readonly="readonly" id="cdlx" name="cdlx" value="<?php echo $row["测点类型"];?>" >
								</div>
								<label for="cdsl" class="col-sm-3 control-label">测点编号：</label>
								<div class="col-sm-2">
										<input type="text" class="form-control" readonly="readonly" id="" name="" value="<?php echo $row["测点编号"];?>" >
								</div>
								<label for="cdsl" class="col-sm-3 control-label">观感评价：</label>
								<div class="col-sm-2" id="ceshila">
										<select id="<?php echo $row["测点编号"];?>" name="cdsl5" class="form-control">
												<option><?php echo $row["观感评价"];?></option>
												<option>√</option>
												<option>×</option>
										</select>
										<!--<input type="text" class="form-control" id="<?php echo $row["测点编号"];?>" name="cdsl1" value="<?php echo $row["观感评价"];?>" placeholder="测点实测值">-->
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

				</div>
			</div>
	 <div role="tabpanel" class="tab-pane fade " id="tjfx">
					 <?php
	           require("../conn.php");  
			   		 $zljcid=$_GET["zljcid"]; 
             $sql = "select 观感评价 from 观感评价新建测点 where 质量检查id='$zljcid' and 项目类别='砌体工程' and 测点类别 = '工艺要求' ";      
	           $result = $conn->query($sql);
	           while($row = $result->fetch_assoc()) {
	         ?>
					   <input type="text" class="form-control hidden" name="gyyq" value="<?php echo $row["观感评价"];?>" >
					<?php
						}
						$conn->close();					
					?>	
					<?php
	           require("../conn.php");  
			   		 $zljcid=$_GET["zljcid"]; 
             $sql = "select 观感评价 from 观感评价新建测点 where 质量检查id='$zljcid' and 项目类别='砌体工程' and 测点类别 = '观感质量' ";      
	           $result = $conn->query($sql);
	           while($row = $result->fetch_assoc()) {
	         ?>
					   <input type="text" class="form-control hidden" name="ggzl" value="<?php echo $row["观感评价"];?>" >
					<?php
						}
						$conn->close();					
					?>
					 <div class="form-group">
					<div class="form-group col-sm-12" >
						<label for="cdlbA" class="col-sm-2 control-label">测点类别：</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="cdlbA" name="cdlbA" value="工艺要求" >
						</div>
						<label for="hgl" class="col-sm-2 control-label">合格率：</label>
						<div class="col-sm-2">
								<input type="text" class="form-control" id="hghg" name="hghg" value="" >
						</div>
					</div>
					<div class="form-group col-sm-12" >
						<label for="qbmpzd" class="col-sm-2 control-label">测点类别：</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="qbmpzd" name="qbmpzd" value="观感质量" >
						</div>
						<label for="hgl1" class="col-sm-2 control-label">合格率：</label>
						<div class="col-sm-2">
								<input type="text" class="form-control" id="hghg1" name="hghg1" value="" >
						</div>
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
						<form id="xjcdform" name="xjcdform"  method="post" class="form-horizontal" role="form" >
					<div class="form-group">
						<label for="cdlb" class="col-sm-3 control-label">测点类别：</label>
								<div class="col-sm-3">
									<select id="cdlb" name="cdlb" class="form-control">
										<option>工艺要求</option>
										<option>观感质量</option>
									</select>
								</div>
						<label for="cdlx" class="col-sm-3 control-label">测点类型：</label>
										<div class="col-sm-3">
											<select id="cdlx1" name="cdlx1" class="form-control">
												<option>组砌</option>
												<option>顶砖</option>
												<option>留槎、拉结筋</option>
												<option>二次构件及保护</option>
												<option>门窗洞口、施工洞口</option>
											</select>
											<select id="cdlx2" name="cdlx2" class="form-control hidden">
												<option>砌筑观感</option>
												<option>二次构件</option>
											</select>
										</div>
						</div>
						<div class="form-group">
							<!--	<label for="ggpj" class="col-sm-3 control-label">观感评价：</label>-->
								<div class="col-sm-3 hidden">								
									<select id="ggpj" name="ggpj" class="form-control">
												<option>√</option>
												<option>×</option>
											</select>
								</div>
								<label for="cdsl" class="col-sm-3 control-label">测点数量：</label>
								<div class="col-sm-3">
										<input type="text" class="form-control" id="cdsl" name="cdsl" value="" placeholder="测点个数">
										<input type="text" class="form-control hidden" id="jzgcid" name="jzgcid" value="<?php echo $_GET["zljcid"];?>" >
										<input type="text" class="form-control hidden" id="zljcsjc" name="zljcsjc" value="<?php echo $_GET["sjc"];?>" >
								</div>
						</div>
						<div class="form-group">
								<div class="col-sm-3 control-label">测区选择原则</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="6" id="cq" name="cq">土建总包标段内各楼栋各户型为一个测区；各楼栋各户型各部位为一个检查点；一个测区为一个合格计算值，累计实测实量10个测区
（不足10个以实计算） </textarea>
								</div>
						</div>
						<div class="form-group">
							<div class="col-sm-3 control-label">检查验收标准</div>
							<div class="col-sm-9">
								<textarea class="form-control" rows="3" id="nr"  name="nr"></textarea>
										</div>
								</div>
								<div class="col-sm-3">
											<input type="text" class="form-control hidden" id="xmlb" name="xmlb" value="砌体工程" placeholder="">
												<input type="text" class="form-control hidden" id="gcid" name="gcid" value="<?php echo $_GET["gcid"];?>" placeholder="">
							
							</div>									
								<div class="modal-footer" >
									<button type="button" class="btn btn-default " data-dismiss="modal">		<a href="scsl.php?id=<?php echo $yhid=$_GET["gcid"];?>&yhid=<?php echo $yhid=$_GET["yhid"]; ?>">返回上一层
						</a></button>
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
        $("#save3").click(function(){ 
//					var value  = $('input[name="radio"]:checked').val();
//				  alert(value);
					$.ajax({
			                cache: true,
			                type: "POST",
			                url:'xjcdbc1.php',
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
   					s+=cdsl1[i].value+'||'; //如果未选中，将value添加到变量s中
						sasa+=cdsl2[i].value+'||';
   		}
   			if(s==''){    							
   				alert("请填写实测值");    					
   			}else{    			 						
// 				alert(sasa);	
						$.ajax({
						 url:'cdbcaa1.php',
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
   					s+=cdsl1[i].value+'||'; //如果未选中，将value添加到变量s中
						sasa+=cdsl2[i].value+'||';
   		}
   			if(s==''){    							
   				alert("请填写实测值");    					
   			}else{    			 						
// 				alert(sasa);	
						$.ajax({
						 url:'cdbcaa1.php',
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
   					s+=cdsl1[i].value+'||'; //如果未选中，将value添加到变量s中
						sasa+=cdsl2[i].value+'||';
   		}
   			if(s==''){    							
   				alert("请填写实测值");    					
   			}else{    			 						
// 				alert(sasa);	
						$.ajax({
						 url:'cdbcaa1.php',
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
								alert ("保存成功");
						}
					});
   			}
			});
			var cdlb = document.getElementById('cdlb');
//			alert (cdlb);
//			sel.addEventListener("change", A(sel), false);
			cdlb.addEventListener('click',
				function(){
//					alert('hello world')
			if (cdlb.value=='工艺要求')
			{ 
//				alert('12300');
				var cdlx1 = document.getElementById('cdlx1');
				cdlx1.setAttribute("class", "form-control");
				var cdlx2 = document.getElementById('cdlx2');
				cdlx2.setAttribute("class", "form-control hidden"); 
			}
			else{
				var cdlx2 = document.getElementById('cdlx2');
				cdlx2.setAttribute("class", "form-control");
				var cdlx1 = document.getElementById('cdlx1');
				cdlx1.setAttribute("class", "form-control hidden");
			}});
			 $("#cdlx1").click(function(){ 
			 	
			 	var cdlx1=document.getElementById("cdlx1").value;
			 	if(cdlx1=="组砌"){
			 		document.getElementById("nr").value='组砌方法正确，无混砌，无通缝；砌体底部导墙高度满足20cm要求';
			 		$("#cdsl").val("10");
			 		
			 	}
			 	else if	(cdlx1=="顶砖"){
			 		document.getElementById("nr").value='顶部采用实心砖斜砌，斜砌角度在45°~60°之间，双侧双向斜砌（倒八）；顶砖待填充墙砌筑完成14天后方可施工；顶砖砂浆饱满、堵塞严实，无明显裂缝';
			 		$("#cdsl").val("10");
			 		
			 	}
			 	
			 	 	else if	(cdlx1=="留槎、拉结筋"){
			 		document.getElementById("nr").value='按要求留设斜槎、阳槎，禁止留阴槎；马牙槎留设符合要求；拉结筋位置、数量、间距、规格、长度及末端弯钩符合要求';
			 		$("#cdsl").val("10");
			 		
			 	}
			 	
			 	 else if (cdlx1="二次构件及保护"){
			 	 	document.getElementById("nr").value='门窗垛及栏杆固定件部位按要求留设预埋件，位置、数量符合要求；砌体上空调孔洞、排气孔洞须采用混凝土预制件；按要求设置砼构造柱、系梁、加强带及拦河压顶；二次构件施工不扰动、破坏砌体；构造柱或砼边框等支模不破坏外墙砌体';
			 	 	$("#cdsl").val("10");
			 	 }
			 	  else if (cdlx1="门窗洞口、施工洞口"){
			 	 	document.getElementById("nr").value='过梁、压顶、砼边框施工符合要求';
			 	 	$("#cdsl").val("10");
			 	 }


			});
			
			
			 $("#cdlx2").click(function(){ 
			 	
			 	var cdlx2=$("#cdlx2").val();
			 	if(cdlx2=="砌筑观感"){
			 		$("#nr").val('单面墙明显缺棱掉角少于3处，单面墙无断砖；勾缝到位，灰缝宽度、厚度、饱满度符合要求，无瞎缝、透缝、假缝');
			 		$("#cdsl").val("10");
			 		
			 	}
			 	else if	(cdlx2=="二次构件"){
			 		$("#nr").val('二次结构浇筑密实，不存在蜂窝、麻面、漏浆、露筋、胀模、夹渣、马牙槎粗糙等缺陷');
			 		$("#cdsl").val("10");
			 		
			 	}
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

//*******************工艺要求****************//
     	var gyyq = document.getElementsByName('gyyq');
      var s2 = 0;
//    alert(cdsczpl.length);
			for(var i=0;i<gyyq.length;i++){
				if(gyyq[i].value=='√'){  
					s2=s2+1;
				}
   	};
			var jgdy = s2/gyyq.length*100;
   		var hghg= document.getElementById('hghg');
   		hghg.value = jgdy+'%';
   		//*******************观感质量****************//
     	var ggzl = document.getElementsByName('ggzl');
      var s2 = 0;

			for(var i=0;i<ggzl.length;i++){
				if(ggzl[i].value=='√'){  
					s2=s2+1;
				}
   	};
			var jgdy1 = s2/ggzl.length*100;
   		var hghg1 = document.getElementById('hghg1');
   		hghg1.value = jgdy1+'%';
   		//***********************算本项目合格率*****************//  
   		var hnthelpj =(jgdy+jgdy1)/2+'%';
      var zljcid1 = document.getElementById('zljcid').value;
      var gcid = document.getElementById('gcid').value;
      var zljcsjc = document.getElementById('zljcsjc').value;
			$.ajax({
						 url:'hglbc.php',
						data:{
							hnthelpj:hnthelpj,
							xmlba:'观感建筑砌体',
							zljcid:zljcid1
							gcid:gcid,
							sjc:zljcsjc,
							scgglb:'观感评价'
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

