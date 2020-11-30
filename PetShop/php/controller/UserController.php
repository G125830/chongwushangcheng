<?php
	include "../service/UserService.php";
	include "../util/ResultMap.php";
	// include "../dao/PdoMysql.php";
	
	class UserController{
		var $userService;
		var $resultMap;
		
		function __construct(){
			$this->userService = new UserService();
			$this->resultMap = new ResultMap();
		}
		
		function login($username,$password){
			try{
				$flag = $this->userService->login($username,$password);
				if($flag){
					$this->resultMap->setFlag(true);
				}else{
					$this->resultMap->setFlag(false);
				}
			}catch(Exception $e){
				echo $e->getMessage();
			}
			echo json_encode($this->resultMap);
		}
	}
	
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$userController = new UserController();
	$userController->login($username,$password);
?>