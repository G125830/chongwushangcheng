<?php
	class ResultMap{//返回结果类
		var $flag;
		var $msg;
		
		function setFlag($flag){
			$this->flag = $flag;
		}
		function setMsg($msg){
			$this->msg = $msg;
		}
		function getFlag(){
			return $this->flag;
		}
		function getMsg(){
			return $this->msg;
		}
	}
?>