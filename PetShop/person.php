<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>个人家园</title>
	</head>
	<body>
		<?php
			function autoload($class){
				include "php/".$class.".php";
			}
			spl_autoload_register("autoload");
			session_start();//开启session
			$master = $_SESSION["master"];
			$pet = $master->getPet();
		?>
		<div>
			<span>名字:</span><?php echo $pet->getName() ?>
			<span>品种:</span><?php echo $pet->getType() ?>
			<span>公母:</span><?php echo $pet->getSex() ?>
			<span>年龄:</span><?php echo $pet->getAge() ?>
			<span>健康值:</span><?php echo $pet->getHealth() ?>
			<span>亲密度:</span><?php echo $pet->getLove() ?>
		</div>
	</body>
</html>
