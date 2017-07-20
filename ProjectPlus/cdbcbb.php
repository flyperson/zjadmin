<?php
	    require("../conn.php");
		$s=$_POST["s"];
		$sasa=$_POST["sasa"];
		$cddid = explode("||",$sasa);
        $cddza = explode("||",$s);
	    for($index1=0;$index1<count($cddid)-1;$index1++){ 
	$sql = "update 观感评价新建测点  set 测点实测值='$cddza[$index1]' where id ='$cddid[$index1]'";
	$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "保存成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		}
$conn->close();		
?>