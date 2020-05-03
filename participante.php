<?php 

$username="infochincha@infochincha20";
$password="Info_chincha";
$database="infochincha";
$link = new mysqli("infochincha20.mysql.database.azure.com",$username, $password, $database);

if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
}
// $consulta= "SELECT * FROM participante";

// $datos=mysqli_query($link,$consulta);

// while ($fila =mysqli_fetch_array($datos)) {
// 	echo $fila['nombres'];
// }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <style type="text/css">
    	body{overflow: hidden}
        #cuadro{
            position: relative;
            border-radius: 30px;
            width:20%;
            height: 60px;
            margin-left: auto;
            margin-right: auto;
            top: 50px;
            bottom: auto;
            display: flex;
            justify-content: center;
            align-content: center;
            flex-direction: column;
            background-color:#4100f7;
            text-align: center;
            -webkit-animation-name: animacion1;
            -webkit-animation-duration:1s;
            -webkit-animation-iteration-count:infinite;
            -webkit-animation-direction:alternate;
            -webkit-animation-timing-function:ease-in-out;
            color:white;
            /*-webkit-animation-delay:1s;*/

        }
        @-webkit-keyframes animacion1{
            0%{
                left:-100px;
               
                
               
            }
            50%{
            	 background-color:white;
            }
            100%{
                left:150px;
                
                
            }
        }
        #tarjeta{
        	background: red;
        	position: relative;
        	width: 15%;
        	height: 100%;
        }
    </style>
</head>
<body>
<div id="cuadro">
        HOLI
    </div>
    <div id="tarjeta">
    	sd
    </div>
</body>
</html>