<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>宠物详情页面</title>
		<style>
			h1{
				text-align: center;
			}
			table{
				width: 80%;
				margin: 0 auto;
			}
			td{
				text-align: center;
				border: 1px solid red;
			}
		</style>
		<script src="js/jquery-3.1.1.js"></script>
	</head>
	<body>
		<button onclick="myPet()">个人家园</button>
		<h1>欢迎光临鸟窝</h1>
		<table>
			<thead>
				<tr>
					<td>品种</td>
					<td>价钱</td>
					<td>状态</td>
					<td>操作</td>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
		<script type="text/javascript">
			$(function(){
				loadPet();
			});
			function loadPet(){
				var xmlhttp;
				var petArray;
				if(window.XMLHttpRequest){
					xmlhttp = new XMLHttpRequest();
				}
				xmlhttp.open("post","php/controller/PetController.php");
				xmlhttp.send();
				xmlhttp.onreadystatechange = function(){
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						var result = xmlhttp.responseText;
						petArray = JSON.parse(result);
						var html='';
						$("tbody").empty();
						for(var i = 0;i<petArray.length;i++){
							html+='<tr>';
							html+='<td>'+petArray[i].type+'</td>';
							html+='<td>'+petArray[i].price+'</td>';
							html+='<td>'+petArray[i].status+'</td>';
							html+='<td><button onclick="getPet('+petArray[i].id+')">领养</button></td>';
							html+='</tr>';
						}
						$("tbody").append(html);
					}
				}
			}
			
			
			
			function myPet(){
				location.href = "person.php";
			}
			function getPet(id){
				id = id.toString();
				var xmlhttp;
				var obj = {};
				if(window.XMLHttpRequest){
					xmlhttp = new XMLHttpRequest();
				}else{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.open("post","php/birdDao.php");
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("id="+id);
				xmlhttp.onreadystatechange = function(){
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						var result = xmlhttp.responseText;
						obj = JSON.parse(result);
						if(obj.flag == true){
			    			location.reload();
			    		}else{
			    			alert("领养失败");
			    		}
					}
				}
				
			}
		</script>
	</body>
</html>
