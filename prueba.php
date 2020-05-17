<?php 
$username="infochincha@infochincha20";
$password="Info_chincha";
$database="infochincha";
$link = new mysqli("infochincha20.mysql.database.azure.com",$username, $password, $database);

$resul=$link->query("SELECT nombres FROM participante");

mysqli_query($link,"SELECT nombres FROM participante");

$name="";

if ($link->ping()) {
	echo "PING";
} else {
	echo "error";
}
$name="MARIA";
// if($condi=$link->prepare("SELECT apellidos FROM participante WHERE nombres=?")){
// 	$condi->bind_param('s',$name);
// 	$condi->execute();
// 	$condi->bind_result($dis);
// 	$condi->fetch();
// 	echo $dis;

if($condi=$link->prepare("SELECT apellidos,dni FROM participante WHERE nombres=?")){
	
	$condi->bind_param('s',$name);
	$condi->execute();
	$condi->bind_result($dis,$dni);
	$condi->fetch();
	
	while ($condi->fetch()) {
		echo $dis."   ".$dni."<br>";
	}
	};
	




	
	?>
<!-- 	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<form action="prueba.php" method="POST">
		<input type="text"  name="nombre">
		<input type="submit"></input>
	</form>
	</body>
	</html> -->

<!-- 	
affected_rows. Obtiene número de filas afectadas -->