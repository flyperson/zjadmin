<?php
	$timestr=$time['year']."-".$time['mon']."-".$time['mday']."/".$time['hours'].":".$time['minutes'].":".$time['seconds'];
	$sjc=$timestr;
	$sjcc =strtotime(".$sjc.");
	
	require("../conn.php");
        $inputgczd=$_POST["inputgczd"];
		$bumen = explode("//",$inputgczd);

		$num1=0;
		$num2=0;
		$c=0;
        for($i=0;$i<count($bumen)-5;$i=$i+5) 
		{   
			$c=$num2;
//			if($i>=1){
//				$c=$c+1;
//			}
			$num1=$i+1;
			$num2=$i+2;
			$num3=$i+3;
			$num4=$i+4;
			$sql1 = "INSERT INTO 班组人员 (工程时间戳,班组名称,班组长,联系方式,进厂时间,出厂时间) values (".strtotime(".$sjcc.").",'$bumen[$i]','$bumen[$num1]','$bumen[$num2]','$bumen[$num3]','$bumen[$num4]')";
			if ($conn->query($sql1) === TRUE) {
			    echo "保存成功";
				
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			} 
		}
		
		
$conn->close();	
?>
