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
    <link rel="stylesheet" type="text/css" media="all" href="../css/daterangepicker-bs3.css"/>
    <!-- Custom styles for this template -->
    <link href="../css/theme.css" rel="stylesheet">
    
    <!-- Custom styles for bootstrap-table -->
    <link href="../css/bootstrap-table.min.css" rel="stylesheet">
    <link href="../css/mycss.css" rel="stylesheet">
    	<script type="text/javascript" src="../js/jedate.js"></script>
    	<script type="text/javascript" src="../js/jedate.min.js"></script>
    	

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
            <li ><a href="../index.php?yhzh=<?php echo $row["账号"];?>">实测实量</a></li>
            <li class="active"><a href="rzgl.php?yhid=<?php echo $row["id"];?>">日志管理管理</a></li>
            <li ><a href="wdgl.php?yhid=<?php echo $row["id"];?>">文档管理</a></li>
            <li><a href="../seclect.php?yhid=<?php echo $row["id"];?>">综合查询</a></li>
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

    			<!-- 内容区域 -->
    		<div class="col-md-12">
    			<div class="panel panel-info">
    				<div class="panel-heading">
    					<h3 class="panel-title">日志管理</h3>
    				</div>
    					   
    				<div class="panel-body">
    					
    				
    					
    					<form id="rzglform" name="rzglform" action="rzglbc.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
									<!--<form id="xmdjform4" action="xg4.php" class="form-horizontal cmxform" enctype="multipart/form-data" role="form"  method="post">-->	
										<div class="panel-heading">
											
										<!--<h3 class="panel-title label label-info"></h3>--><HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1>
										</div>
										
												
											<div class="form-group">
												<label for="bw" class="col-sm-2 control-label">部位：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="bw" name="bw" >
												</div>
											<label for="rzlx" class="col-sm-3 control-label">日志类型：</label>
										<div class="col-sm-3">
											<select id="rzlx" name="rzlx" class="form-control">
												<option>问题</option>
												<option>通知</option>
											</select>
										</div>
											</div>
											<div class="form-group">
												<label for="rzmc" class="col-sm-2 control-label">日志名称：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="rzmc" name="rzmc" >
												</div>
												<label for="txsj" class="col-sm-3 control-label">日志日期：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="txsj" name="txsj" >
												</div>
											</div>
											
											
											<?php
	   						require("../conn.php");
								$yhid=$_GET["yhid"];
	   						$sql = "select * from 用户信息   where id='$yhid'";
	   						$result = $conn->query($sql);
	   						while($row = $result->fetch_assoc()) {
   					?>
   					
											<div class="form-group">
												<label for="txr" class="col-sm-2 control-label">填写人：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="txr" name="txr" value="<?php echo $row['姓名'] ?>" >
												</div>
												<label for="gw" class="col-sm-3 control-label">岗位：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="gw" name="gw" value="<?php echo $row['部门']?>" >
												</div>
											</div>
											  <?php
								}
								$conn->close();		
						 ?>
									   <HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1>
									<div class="form-group">
											<label for="nr" class="col-sm-2 control-label">日志内容说明：</label>
											<div class="col-sm-9">
												<textarea class="form-control" rows="7" id="nr" name="nr" value="" ></textarea>
											</div>
											
										
										<div class="form-group">						
											<div class="col-sm-offset-3 col-sm-7">							
												<p class="help-block col-xs-12 col-md-6">附件上传</p>
												  <input type="file" name="file" id="file" value=""><br>
											
											</div>
										</div>
										
										<div class="form-group">
												<label for="jsr" class="col-sm-2 control-label">接收人：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="jsr" name="jsr" >
												</div>
												<label for="jzrq" class="col-sm-3 control-label">截止日期：</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" id="jzrq" name="jzrq" >
												</div>
											</div>
										
										
									<div class="modal-footer" >
									<input type="submit" class="btn btn-primary col-sm-offset-9" name="submit" value="保存">
	
					</div>
					</form>
    				
    					
    					
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
   <script type="text/javascript" src="../js/moment.js"></script>
	 <script type="text/javascript" src="../js/daterangepicker.js"></script>  
   <script src="../js/bootstrap-table-zh-CN.min.js"></script>
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/mySidenav.js" type="text/javascript" charset="utf-8"></script>
     <script type="text/javascript"src="../js/jquery.validate.min.js"></script>
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
    
    <script type="text/javascript">
    	
    	$("#save").click(function(){ 
    		var gcid=document.getElementById("gcid").value;
    		var nr=document.getElementById("nr").value;
    		var bt=document.getElementById("bt").value;
    		var txsj=document.getElementById("txsj").value;
    		var rzlx=document.getElementById("rzlx").value;
    		var ry=document.getElementById("ry").value;
					$.ajax({
			                cache: true,
			                type: "POST",
			                url:'rzglxgbc.php',
			                data:{
			                	gcid,
			                	nr,
			                	bt,
			                	txsj,
			                	rzlx,
			                	ry,
			                	
			                },// 你的formid
			                async: false,
			                error: function(request) {
			                    alert("Connection error");
			                },
			                success: function(data) {
			                    alert("保存成功");
			                }
			            });
			            
			            window.location.reload()
			});  
    </script>
     
     
  <script type="text/javascript">
   
    jeDate({
		dateCell:"#txsj",
		format:"YYYY-MM-DD",
		isinitVal:true,
		isTime:true, //isClear:false,
		minDate:"2014-09-19 00:00:00",
		okfun:function(val){alert(val)}
	})
	   </script>  
	   
	   
	   <script type="text/javascript">
   
    jeDate({
		dateCell:"#jzrq",
		format:"YYYY-MM-DD",
		isinitVal:true,
		isTime:true, //isClear:false,
		minDate:"2014-09-19 00:00:00",
		okfun:function(val){alert(val)}
	})
	   </script>  
	   
	   
  </body>
</html>