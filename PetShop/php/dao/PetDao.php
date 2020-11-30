<?php
	include "PdoMysql.php";
	
	class PetDao{
		var $pdoMysql;  //获取连接、关闭连接对象
		
		function __construct(){
			$this->pdoMysql = new PdoMysql();
		}
		
		function selectAllPetByType($type){
			$pdo = $this->pdoMysql->getConnection();
			$sql = "select * from pet where status != 1 and type = '".$type."'";
			$result = $pdo->query($sql);
			$this->pdoMysql->closeCon($pdo);
			return $result;
		}
		
		/**
		 * 根据宠物id，修改宠物状态:待售-->售出
		 */
		function updateStatusById($id){
			$pdo = $this->pdoMysql->getConnection();
			$row = $pdo->exec("update pet set status = 1 where id = ".$id);
			$this->pdoMysql->closeCon($pdo);
		}
		
		/**
		 * 根据宠物id层查询宠物单价
		 */
		function selectPriceById($id){
			$pdo = $this->pdoMysql->getConnection();
			$result = $pdo->query("select price from pet where id = ".$id);
			$this->pdoMysql->closeCon($pdo);
			return $result;
		}
	}
?>