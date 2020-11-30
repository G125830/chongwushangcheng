<?php
	//pdoMysqlMysql.php文件: 创建连接、关闭连接
	class pdoMysql{
		function getConnection(){//建立连接
			try{//可能发生异常的代码
				$pdo = new PDO("mysql:host=127.0.0.1;dbname=pershop","root","123456");
				return $pdo;
			}catch(Exception $e){//处理异常
				echo "数据库连接失败".$e->getMessage();
				return;
			}
		}
		function closeCon($pdo){//关闭数据库连接
			if(!empty($pdo)){
				$pdo = null;
			}
		}
	}
?>