<?php
	class Pet{
		var $id;
		var $name;
		var $type;
		var $price;
		var $age;
		var $health;
		var $love;
		var $status;
		
		function setId($id){
			$this->id = $id;
		}
		function setType($type){
			$this->type = $type;
		}
		function setPrice($price){
			$this->price = $price;
		}
		function setStatus($status){
			$this->status = $status;
		}
		
		
		function getId(){
			return $this->id;
		}
		function getName(){
			return $this->name;
		}
		function getType(){
			return $this->type;
		}
		function getPrice(){
			return $this->price;
		}
		function getSex(){
			return $this->sex;
		}
		function getAge(){
			return $this->age;
		}
		function getHealth(){
			return $this->health;
		}
		function getLove(){
			return $this->love;
		}
		function getStatus(){
			return $this->status;
		}
	}
?>