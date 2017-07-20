<?php
	//引入连接数据库文件
		require("../conn.php");
		$aabb=$_POST["aabb"];
$sql = "delete from 文件附件  where id = '$aabb';";

if ($conn->query($sql) === TRUE) {
    echo "删除成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();		
?>