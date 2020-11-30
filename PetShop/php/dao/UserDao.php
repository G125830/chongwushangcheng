<?php
	include "PdoMysql.php";
	
	class UserDao{
		var $pdoMysql;  //获取连接、关闭连接对象
		
		function __construct(){
			$this->pdoMysql = new PdoMysql();
		}
		
		function login($username,$password){
			$pdo = $this->pdoMysql->getConnection();
			$sql = "select * from user where username = '".$username."' and password = '".$password."'";
			$result = $pdo->query($sql);
			$this->pdoMysql->closeCon($pdo);
			return $result;
		}
		
	}
?>