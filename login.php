<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>中建二局三公司项目日志及实测实量管理系统</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">
	<style type="text/css">
		.form-bg{
		    background: #00b4ef;
		}
		.form-horizontal{
		    background: #fff;
		    padding-bottom: 100px;
		    border-radius: 10px;
		    text-align: center;
		}
		.form-horizontal .heading{
		    display: block;
		    font-size: 25px;
		    font-weight: 500;
		    padding: 35px 0;
		    border-bottom: 1px solid #f0f0f0;
		    margin-bottom: 30px;
		}
		.form-horizontal .form-group{
		    padding: 0 40px;
		    margin: 0 0 25px 0;
		    position: relative;
		}
		.form-horizontal .form-control{
		    background: #f0f0f0;
		    border: none;
		    border-radius: 20px;
		    box-shadow: none;
		    padding: 0 20px 0 45px;
		    height: 40px;
		    transition: all 0.3s ease 0s;
		}
		.form-horizontal .form-control:focus{
		    background: #e0e0e0;
		    box-shadow: none;
		    outline: 0 none;
		}
		.form-horizontal .form-group i{
		    position: absolute;
		    top: 12px;
		    left: 60px;
		    font-size: 17px;
		    color: #c8c8c8;
		    transition : all 0.5s ease 0s;
		}
		.form-horizontal .form-control:focus + i{
		    color: #00b4ef;
		}
		.form-horizontal .fa-question-circle{
		    display: inline-block;
		    position: absolute;
		    top: 12px;
		    right: 60px;
		    font-size: 20px;
		    color: #808080;
		    transition: all 0.5s ease 0s;
		}
		.form-horizontal .fa-question-circle:hover{
		    color: #000;
		}
		.form-horizontal .main-checkbox{
		    float: left;
		    width: 20px;
		    height: 20px;
		    background: #11a3fc;
		    border-radius: 50%;
		    position: relative;
		    margin: 5px 0 0 5px;
		    border: 1px solid #11a3fc;
		}
		.form-horizontal .main-checkbox label{
		    width: 20px;
		    height: 20px;
		    position: absolute;
		    top: 0;
		    left: 0;
		    cursor: pointer;
		}
		.form-horizontal .main-checkbox label:after{
		    content: "";
		    width: 10px;
		    height: 5px;
		    position: absolute;
		    top: 5px;
		    left: 4px;
		    border: 3px solid #fff;
		    border-top: none;
		    border-right: none;
		    background: transparent;
		    opacity: 0;
		    -webkit-transform: rotate(-45deg);
		    transform: rotate(-45deg);
		}
		.form-horizontal .main-checkbox input[type=checkbox]{
		    visibility: hidden;
		}
		.form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{
		    opacity: 1;
		}
		.form-horizontal .text{
		    float: left;
		    margin-left: 7px;
		    line-height: 20px;
		    padding-top: 5px;
		    text-transform: capitalize;
		}
		.form-horizontal .btn{
		    float: right;
		    font-size: 14px;
		    color: #fff;
		    background: #00b4ef;
		    border-radius: 30px;
		    padding: 10px 25px;
		    border: none;
		    text-transform: capitalize;
		    transition: all 0.5s ease 0s;
		}
		@media only screen and (max-width: 479px){
		    .form-horizontal .form-group{
		        padding: 0 25px;
		    }
		    .form-horizontal .form-group i{
		        left: 45px;
		    }
		    .form-horizontal .btn{
		        padding: 10px 20px;
		    }
		}
	</style>
	<!--[if IE]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="htmleaf-container">
		<!-- <header class="htmleaf-header">
			<h1>中建二局三公司项目日志及实测实量管理系统<span></span></h1>
			<div class="htmleaf-links">
				<a class="htmleaf-icon icon-htmleaf-home-outline" href="#" title="jQuery之家" target="_blank"><span> 首页</span></a>
				<a class="htmleaf-icon icon-htmleaf-arrow-forward-outline" href="#" title="返回首页" target="_blank"><span> 返回下载页</span></a>
			</div>
		</header> -->
		<div class="demo form-bg" style="padding: 10px 0;">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-offset-4 col-md-6">
		                    <form id="aqxcform" name="aqxcform" method="post" class="form-horizontal" role="form" action="loginyz.php" style="background-image: url('img/login.jpg');width: 400px;height:550px;background-size: 100% 100%;">
		                        <!-- <span class="heading">用户登录</span> -->
								<h1>&nbsp;<span></span></h1>
                                <h1>&nbsp;<span></span></h1>
								<h1>&nbsp;<span></span></h1>
								<h1>&nbsp;<span></span></h1>
								<h1>&nbsp;<span></span></h1>
		                        <div class="form-group">
		                            <input type="text" id="username" name="username" class="form-control" id="inputEmail3" placeholder="用户名">
		                            <i class="fa fa-user"></i>
		                        </div>
		                        <div class="form-group help">
		                            <input type="password" id="password" name="password" class="form-control" id="inputPassword3" placeholder="密　码">
		                            <i class="fa fa-lock"></i>
		                            <a href="#" class="fa fa-question-circle"></a>
		                        </div>
		                        <div class="form-group">
		                            <div class="main-checkbox">
		                                <input type="checkbox" value="None" id="checkbox1" name="check"/>
		                                <label for="checkbox1"></label>
		                            </div>
		                            <span class="text" style="font-size:15px;color:#000000">记住密码</span>
		                            <button  class="btn btn-default" id="save10">登录</button>	
		                        </div>
								<div class="row col-md-12 form-group">
							<!-- 	  <button  >   -->
									  <a href="zjejsgs/upload/upload/平台端用户操作手册.docx" class="col-md-6" style="font-size:12px;color:#000000">
										平台端用户操作手册
									  </a>
								 <!--  </button>
								  								 
								  <button  > -->
									  <a href="zjejsgs/upload/upload/手机端用户操作手册.docx" class="col-md-6" style="font-size:12px;color:#000000">
										手机端用户操作手册
									  </a>
								  <!-- </button> -->
								</div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		
	</div>
	

	<script type="text/javascript">
				$("#save10").click(function(){ 
					$.ajax({
		                cache: true,
		                type: "POST",
		                url:'loginyz.php',
		                data:$('#aqxcform').serialize(),// 你的formid
		                async: false,
		                error: function(request) {
		                    alert("Connection error");
		                },
		                success: function(data) {
//		                    alert("123");
		                }
		            });
				});  
	    </script>
</body>
</html>