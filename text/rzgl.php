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
            <li class="active"><a href="rzgl.php?yhid=<?php echo $row["id"];?>">日志管理</a></li>
            <li ><a href="wdgl.php?yhid=<?php echo $row["id"];?>">文档管理</a></li>
            <!--<li><a href="../seclect.php?yhid=<?php echo $row["id"];?>">综合查询</a></li>-->
            <li><a href="../system.php?yhid=<?php echo $row["id"];?>">系统管理</a></li>
            
          </ul>
        </div>
      </div>
    </nav>
             
           
    <div id="container" class="container">
    	<div class="row">
    		<!--左侧导航菜单 -->
    							
    		<!--左侧导航菜单 -->
    		<div class="col-md-2">
    			<div class="bs-docs-sidebar affix" role="complementary">
    				<ul class="nav bs-docs-sidenav">
    					<li ><a href="Project_in.php?id=<?php echo $row["id"];?>&yhid=<?php echo $row["用户id"];?>">日志管理</a>
    					</li>    					
    						
    					
    				</ul>
    			</div>    			
    		</div><!--左侧导航菜单 -->
    		
    
			
    			<!-- 内容区域 -->
    		<div class="col-md-10">
    			<div class="panel panel-info">
    				<div class="panel-heading">
    					<h3 class="panel-title">日志管理</h3>
    				</div>
    					   
    				<div class="panel-body">
    					<!-- 表格自定义按钮 -->
    					<div id="toolbar" class="btn-group">
    						<a href="rzglxj.php?yhid=<?php echo $yhid?>"><button type="button" class="btn btn-default" >
    							<i class="glyphicon glyphicon-plus"> 新建日志</i>
    						</button></a>
    						<?php
								}
								$conn->close();		
						 ?>
    						
    					
    						
  						
    				</div>
    					<div class="#">
    						<form method="post">
    						<fieldset>
                  <div class="control-group">
    			  <?php 
			         		  $date=date("Y-m-d");
			         		  $time=strtotime($date);
							  $firstday=date('m-01-Y',strtotime(date('Y',$time).'-'.(date('m',$time)-1).'-01'));
	//												echo $firstday;
								$arr = getdate();
							  if($arr['mon'] == 12){
							   $year = $arr['year'] +1;
							   $month = $arr['mon'] -11;
							   $day = $arr['mday'];
							   if($day < 10){
							    $mday = '0'.$day;
							   }else {
							    $mday = $day;
							   }
							   $firstday1 = $year.'-0'.$month.'-01';
							  
							  }else{
							   $time=strtotime($date);
							   $firstday1=date('m-01-Y',strtotime(date('Y',$time).'-'.(date('m',$time)+1).'-01'));
							  }
	//											   echo $firstday1;
								 
         	   ?>                    
                    <div class="controls">
                     <div class="input-prepend input-group">
                       <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                       <input type="text" style="width: 400px" name="reservation" id="reservationtime" class="form-control" value="<?php echo $firstday;  ?> 1:00 PM - <?php echo $firstday1;  ?> 1:30 PM"  class="span4"/>
                       <div class="col-md-3">
                       <select id="gwsx" name="gwsx" class="form-control">
														<?php
												       require("../conn.php");                
												       $sql = "select *  from  公司部门  ";
												       $result = $conn->query($sql);
												       while($row = $result->fetch_assoc()) {
												    ?>
														<option><?php echo $row["部门"];?></option>
														<?php
															}
															$conn->close();					
														?>
												</select></div>
                       <input type="text" style="width: 200px" id="liu" name="liu" class="form-control hidden" value="2017-01-01" >
                       <input type="text" style="width: 200px" id="endtime" name="endtime" class="form-control hidden" value="2017-01-31"/>
                       <input type="submit" class="btn col-sm-offset-1" value="查询">
                     </div>
                    </div>
                  </div>
                 </fieldset>
                 </form>
    					</div>
    					<table id="table_gclb">
    						<thead>
								      <tr>
								      	 <th><input type="checkbox"></th>
								      	 <th>日志名称</th>
								         <th>填写人</th>
								         <th>日志日期</th>
								         <th>日志类型</th>
								         <th>岗位</th>
						
								         <th>日志内容</th>
								          <th>接收人</th>
								         <th>截止日期</th>
								         <th>任务附件</th>
								         <th>操作</th>
								         
								         
								      </tr>
								   </thead>
								   <tbody>
						            <?php
						            	error_reporting(E_ALL ^ E_NOTICE);
										$liu =$_POST['liu'];
										$gwsx =$_POST['gwsx'];
										$endtime =$_POST['endtime'];										
						//				echo $_GET["id"];
										$gcid=$_GET["id"];
										$yhid=$_GET["yhid"];
										require("../conn.php");

										$sql = "select * from 工程日志信息  where 日志日期 between '$liu'and '$endtime' and 岗位='$gwsx' ";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()) {
						                         					
						            ?>  
								      <tr>
								      	 <td><a href="rzglxg.php?id=<?php echo $row["id"];?>&yhid=<?php echo $yhid?>"><?php echo $row["日志名称"];?></a></td>
								         <td><?php echo $row["填写人"];?></td>
								         <td><?php echo $row["日志日期"];?></td>
								         <td><?php echo $row["日志类型"];?></td>
								         <td><?php echo $row["岗位"];?></td>
								         <td><?php echo $row["日志内容说明"];?></td>
								         <td><?php echo $row["接收人"];?></td>
								         <td><?php echo $row["截止日期"];?></td>
								         <td>
						<img src="upload/<?php  echo $row["任务附件"] ?> " alt="<?php  echo $row["任务附件"] ?>"   width="100px" height="100px">
					</td>
					<td>
					<button id="<?php echo $row["id"];?>" onclick="dianji3(this.id);" type="button" class="btn btn-default">
                   	 		删除
                   	</button></td>
								      </tr>
						            <?php
										}
										$conn->close();
								    ?>  								     
								   </tbody>
    					</table>
    				</div>
    			</div>
    			
    			<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">新建日志</h4>
            </div>
            <from id="rzglform" name="rzglform" action="rzglbc.php" method="post" class="form-horizontal" role="form"  >
            <div class="modal-body">
            	
            	<div class="form-group ">
								
								<label for="ry" class="col-sm-2 control-label">人员：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="ry" name="ry" placeholder=""  >
									
								</div>
								
									<label for="rzlx" class="col-sm-3 control-label">日志类型：</label>
										<div class="col-sm-3">
											<select id="rzlx" name="rzlx" class="form-control">
												<option>问题</option>
												<option>通知</option>
											</select>
										</div>
							</div>
							
							<div class="form-group ">
								
								<label for="bt" class="col-sm-2 control-label">标题：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="bt" name="bt" placeholder=""  >
									
								</div>
								
									<label for="txsj" class="col-sm-3 control-label">填写时间：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="txsj" name="txsj" placeholder=""  >
									
								</div>
							</div>
							
							
								<div class="form-group ">
							<label for="bm" class="col-sm-2 control-label">部门：</label>
								<div class="col-sm-3">
									<select id="bm" name="bm" class="form-control">
										<?php
			                   require("../conn.php");
			                   $sql = "select * from 公司部门  ";
			                   $result = $conn->query($sql);
			                   while($row = $result->fetch_assoc()) {    					
			               ?>
										<option><?php echo $row["部门"];?></option>
										 <?php
											}
											$conn->close();	
										 ?>
									</select>
								</div>
							</div>
							
							<div class="form-group ">
								
								<div class="col-sm-2 control-label">内容</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="6" id="nr"  name="nr"></textarea>
									
								</div>
								
								
							</div>
            	
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
               <button  id="save" type="button" class="btn btn-primary">提交保存</button>
               
            </div>
            </form>
        </div><!-- /.modal-content -->
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
        var bianliang=document.getElementById("liu");
    	var endtime=document.getElementById("endtime");
        $(document).ready(function() {
        $('#reservationtime').daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          format: 'MM/DD/YYYY h:mm A'
          }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          var a=document.getElementById("reservationtime").value;          
          	  bianliang.value=start.toISOString();
          	  endtime.value=end.toISOString();          
          });
            });
     </script>
    <script type="text/javascript">
    	
    	$("#save").click(function(){ 
    		var nr=document.getElementById("nr").value;
    		var bt=document.getElementById("bt").value;
    		var txsj=document.getElementById("txsj").value;
    		var rzlx=document.getElementById("rzlx").value;
    		var ry=document.getElementById("ry").value;
    		var bm=document.getElementById("bm").value;
					$.ajax({
			                cache: true,
			                type: "POST",
			                url:'rzglbc.php',
			                data:{
			                	nr,
			                	bt,
			                	txsj,
			                	rzlx,
			                	ry,
			                	bm,
			                	
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
			
			
			function dianji3(id){
//							alert(id);
							$.ajax({
				                cache: true,
				                type: "POST",
				                url:'rzglsc.php',
				                data:{
				                	tpid1:id
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
			
			
    </script>
     <script>  
        $(function(){  
            function initTableCheckbox() {  
                var $thr = $('table thead tr');  
//              var $checkAllTh = $('<th><input type="checkbox" id="checkAll" name="checkAll" /></th>');  
//              /*将全选/反选复选框添加到表头最前，即增加一列*/  
//              $thr.prepend($checkAllTh);  
//              /*“全选/反选”复选框*/  
                var $checkAll = $thr.find('input');  
                $checkAll.click(function(event){  
                    /*将所有行的选中状态设成全选框的选中状态*/  
                    $tbr.find('input').prop('checked',$(this).prop('checked'));  
                    /*并调整所有选中行的CSS样式*/  
                    if ($(this).prop('checked')) {  
                        $tbr.find('input').parent().parent().addClass('warning');  
                    } else{  
                        $tbr.find('input').parent().parent().removeClass('warning');  
                    }  
                    /*阻止向上冒泡，以防再次触发点击操作*/  
                    event.stopPropagation();  
                });  
                /*点击全选框所在单元格时也触发全选框的点击操作*/  
//              $checkAllTh.click(function(){  
//                  $(this).find('input').click();  
//              });  
                var $tbr = $('table tbody tr');  
                var $checkItemTd = $('<td><input type="checkbox" name="checkItem" /></td>');  
                /*每一行都在最前面插入一个选中复选框的单元格*/  
                $tbr.prepend($checkItemTd);  
                /*点击每一行的选中复选框时*/  
                $tbr.find('input').click(function(event){  
                    /*调整选中行的CSS样式*/  
                    $(this).parent().parent().toggleClass('warning');  
                    /*如果已经被选中行的行数等于表格的数据行数，将全选框设为选中状态，否则设为未选中状态*/  
                    $checkAll.prop('checked',$tbr.find('input:checked').length == $tbr.length ? true : false);  
                    /*阻止向上冒泡，以防再次触发点击操作*/  
                    event.stopPropagation();  
                });  
                /*点击每一行时也触发该行的选中操作*/  
                $tbr.click(function(){  
                    $(this).find('input').click();  
                });  
            }  
            initTableCheckbox();  
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
	   
	   
  </body>
</html>