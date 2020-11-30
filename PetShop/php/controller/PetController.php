<?php
	// include "../bean/Master.php";
	require "../util/ResultMap.php";
	require "../service/PetService.php";
	
	class PetController{
		var $petService;
		var $resultMap;
		var $petArray;
		
		function __construct(){
			$this->petService = new PetService();
			$this->resultMap = new ResultMap();
		}
		function selectAllPetByType(){//查询所有宠物信息
			try{
				$type = $_COOKIE["petType"];
				$this->petArray = $this->petService->selectAllPetByType($type);
			}catch(Exception $e){
				echo $e->getMessage();
			}
			return $this->petArray;
		}
	}
	
	$petController = new PetController();
	$petArray = $petController->selectAllPetByType();
	echo json_encode($petArray);
?>