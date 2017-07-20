<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
  </head>
<body>
<?php
	require("conn.php");
	$username=$_POST['username'];
 	$password=$_POST['password'];
	if ($username && $password){
		$Query = "Select count(*) as AllNum from 用户信息 where  账号='".$username."' and 密码='".$password."'"; 
///							echo $Query;
		$a     = mysqli_query( $conn, $Query ); 
		$b     = mysqli_fetch_assoc( $a ); 
//							echo $b['AllNum']; //条数  	
//	 $sql = "SELECT * FROM 用户信息 WHERE  账号='".$username."' and 密码='".$password."'";
//	 $res = mysql_query($sql);
//	 $rows=mysql_num_rows($res);
	  if($b['AllNum']){
	   header("refresh:0;url=index.php?yhzh=$username");//跳转页面，注意路径
	   exit;
	 }
	  else{
	  	echo "<script language=javascript>alert('用户名密码错误');history.back();</script>";
	  }
	 
	}else {
	 echo "<script language=javascript>alert('用户名密码不能为空');history.back();</script>";
	}
//	$sql = "select * from 用户信息 where 账号='".$username."'";
//	$result = $conn->query($sql);
//	$row = $result->fetch_assoc();
//	if($passwd==$row["密码"])	{
//		$jsonresult='error';
//		$shji='';
//		echo 'login fail!!';
//		
//	}else{
//		$jsonresult='success';
//		$shji=$row["手机"];
//		echo '成功';
// 		header("Location:../index.php");header("Location:login.php");
//	}
?>
  </body>
</html>

