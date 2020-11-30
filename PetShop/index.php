<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<style>
			h1{
				text-align: center;
			}
			.container{
				border: 1px solid black;
				width: 80%;
				margin:0 auto;
			}
			.container div{
				float: left;
				width: 238px;
				border: 1px solid grey;
				margin-left: 35px;
			}
		</style>
		<script src="js/jquery-3.1.1.js"></script>
	</head>
	<body>
		<?php 
			include "php/bean/Master.php";
			session_start();//开启session
		?>
		<button onclick="myPet()">个人家园</button>
		<h1>欢迎
			<mark>
				<?php 
					$master = $_SESSION["master"];//从session中取出登陆用户
					echo $master->getName();
				?>
			</mark>
			光临宠物商店
		</h1>
		<div class="container">
			<div>
				<img src="img/dog.jpg"/>
				<button onclick="detail('dog')">查看狗</button>
			</div>
			<div>
				<img src="img/cat.jpg"/>
				<button onclick="detail('cat')">查看猫</button>
			</div>
			<div>
				<img src="img/mouse.jpg"/>
				<button onclick="detail('mouse')">查看仓鼠</button>
			</div>
			<div>
				<img src="img/bird.jpg"/>
				<button onclick="detail('bird')">查看鸟</button>
			</div>
		</div>
		<script type="text/javascript">
			function detail(petType){
				$.ajax({
					type:"post",
					url:"php/controller/PetTypeCookie.php",
					data:{
						petType:petType
					},
					dataType:"json",
					success:function(result){
						location.href = "petPage.php";
					}
				});
			}
			function myPet(){
				location.href = "person.php";
			}
		</script>
	</body>
</html>
