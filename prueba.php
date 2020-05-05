<?php 
$username="infochincha@infochincha20";
$password="Info_chincha";
$database="infochincha";
$link = new mysqli("infochincha20.mysql.database.azure.com",$username, $password, $database);

if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
}
$ran=rand(1,172);
$envio= "SELECT * FROM participante WHERE id='$ran'";
		$consulta=mysqli_query($link,$envio);
		while ($fila =mysqli_fetch_array($consulta)) {
 		$o=$fila['id'];	
 		$tubo=$fila['nombres'].' '.$fila['apellidos'];
 	}		
$numero =rand(1,$o);

echo "$tubo";
	
	?>