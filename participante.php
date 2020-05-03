<?php 

$username="infochincha@infochincha20";
$password="Info_chincha";
$database="infochincha";
$link = new mysqli("infochincha20.mysql.database.azure.com",$username, $password, $database);

if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
}
$consulta= "SELECT * FROM participante where id='1'";

$datos=mysqli_query($link,$consulta);

while ($fila =mysqli_fetch_array($datos)) {
 	$ima=$fila['imagen'];
} 

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
        #CENTRAL{
        	background: blue;
        }
        #tarjeta{
        	background: red;
        	position: relative;
        	width: 200px;
        	height: 200px;
        	float:left;
        	border-radius:8px;
        	margin-left:10px;
        	margin-bottom:10px;
        }
        #nombre{
        	position: relative;
        	background: white;
        	color:blue;
        	border-radius: 8px;
        	text-align: center;
        	width: 90%;
        	height: 40px;
        	top:75%;
        	margin:0px auto;
        }
        img{
        	position:absolute;
        	
        	width: 200px;
        	height: 200px;
        	display: table-cell;
        	vertical-align:middle;
    		text-align:center;
    		border-radius: 8px;

        	
        }
        table{
        	background: green;
        	width:80%;
        	height: 200px;
        	margin:0 auto;
        }
        td{
        	
        	background:teal;
        }
    </style>
</head>
<body>
	<!-- <table>
		<tr>
			<td>
				<div id="tarjeta" >
				<img src="<?php echo $ima?>">
				<div id="nombre" >
    		MAICOL
    			</div>	
    			</div>
    		</td>
    		<td>
				<div id="tarjeta" >
				<img src="<?php echo $ima?>">
				<div id="nombre" >
    		MAICOL
    			</div>	
    			</div>
    		</td>
    		<td>
				<div id="tarjeta" >
				<img src="<?php echo $ima?>">
				<div id="nombre" >
    		MAICOL
    			</div>	
    			</div>
    		</td>
    		<td>
				<div id="tarjeta" >
				<img src="<?php echo $ima?>">
				<div id="nombre" >
    		MAICOL
    			</div>	
    			</div>
    		</td>
		</tr>
		<tr>
			<td>2</td>
		</tr>
	</table> -->
<div id="CENTRAL" >
<div id="cuadro">
        HOLI
    </div>
    <div id="tarjeta" >
    	
	<img src="<?php echo $ima?>">
    	<div id="nombre" >
    		MAICOL
    	</div>	
    </div>
    <div id="tarjeta" >
    	
<img src="<?php echo $ima?>">
    	<div id="nombre" >
    		
    	</div>
    	sd
    </div><div id="tarjeta" >
    	
<img src="<?php echo $ima?>">
    	<div id="nombre" >
    		
    	</div>
    	sd
    </div><div id="tarjeta" >
    	
<img src="<?php echo $ima?>">
    	<div id="nombre" >
    		
    	</div>
    	sd
    </div><div id="tarjeta" >
    	
<img src="<?php echo $ima?>">
    	<div id="nombre" >
    		
    	</div>
    	sd
    </div><div id="tarjeta" >
    	
<img src="<?php echo $ima?>">
    	<div id="nombre" >
    		
    	</div>
    	sd
    </div><div id="tarjeta" >
    	
<img src="<?php echo $ima?>">
    	<div id="nombre" >
    		scs
    	</div>
    	sd
    </div>
</div>
</body>
</html>