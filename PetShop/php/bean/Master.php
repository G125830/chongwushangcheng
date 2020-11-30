<?php
	class Master{
		var $username;
		var $password;
		var $name;
		var $money;
		var $pet;
		function setPet($pet){
			$this->pet = $pet;
		}
		function getPet(){
			return $this->pet;
		}
		function getName(){
			return $this->name;
		}
		function getMoney(){
			return $this->money;
		}
		function getUsername(){
			return $this->username;
		}
		function getPassword(){
			return $this->password;
		}
		function __construct($username,$password,$name,$money){
			$this->password = $password;
			$this->money = $money;
			$this->username = $username;
			$this->name = $name;
		}
	}
?>