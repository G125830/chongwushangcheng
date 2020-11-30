<?php
	include "../bean/Pet.php";
	include "../dao/PetDao.php";
	
	class PetService{
		var $petDao;  //获取连接、关闭连接对象
		
		function __construct(){
			$this->petDao = new PetDao();
		}
		/**
		 * 查询所有宠物信息
		 */
		function selectAllPetByType($type){
			$result = $this->petDao->selectAllPetByType($type);
			$petArray = array();
			foreach($result as $val){//循环dao层返回的结果集
				$pet = new Pet();//创建宠物对象，存储循环出来的每一只宠物
				$pet->setId($val["id"]);
				if($val["type"] == "dog"){
					$pet->setType("狗");
				}else if($val["type"] == "bird"){
					$pet->setType("鸵鸟");
				}else if($val["type"] == "cat"){
					$pet->setType("猫");
				}else if($val["type"] == "mouse"){
					$pet->setType("杰瑞");
				}
				$pet->setPrice($val["price"]);
				if($val["status"] == 0){
					$pet->setStatus("待售");
				}else if($val["status"] == 2){
					$pet->setStatus("嗝屁~");
				}
				array_push($petArray,$pet);
			}
			return $petArray;
		}
		
	}
?>