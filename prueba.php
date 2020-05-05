<?php 
$username="infochincha@infochincha20";
$password="Info_chincha";
$database="infochincha";
$link = new mysqli("infochincha20.mysql.database.azure.com",$username, $password, $database);

if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
}

$envio= "SELECT * FROM participante ";
		$consulta=mysqli_query($link,$envio);
		$datas=array();
		while ($fila =mysqli_fetch_assoc($consulta)) {
			$datas[]=$fila;
			// echo $fila['nombres'];
 		
 	}		
// $numero =rand(1,$o);
 	$ran=rand(1,111);
foreach($datas as $data){

	if($data['id']==$ran){
		echo $data['nombres'].' '.$data['apellidos'];	}
	
}

	
	?>