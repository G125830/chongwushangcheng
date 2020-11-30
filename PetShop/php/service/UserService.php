<?php
	include "../dao/UserDao.php";
	include "../bean/Master.php";
	
	class UserService{
		var $userDao;
		
		function __construct(){
			$this->userDao = new UserDao();
		}
		
		function login($username,$password){
			$result = $this->userDao->login($username,$password);
			$flag;
			if($result->rowCount() >= 1){//如果查询结果行数大于等于1
				$name;
				$money;
				foreach($result as $val){
					$name = $val["name"];
					$money = $val["money"];
				}
				$master = new Master($username,$password,$name,$money);
				session_start();
				$_SESSION["master"] = $master;
				$flag = true;
			}else{
				$flag = false;
			}
			return $flag;
		}
	}
?>