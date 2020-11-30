<?php
	include "../util/ResultMap.php";
	
	$type = $_POST["petType"];
	setcookie("petType",$type,time()+60,"/");//创建cookie
	$resultMap = new ResultMap();
	$resultMap->setFlag(true);
	echo json_encode($resultMap);
?>