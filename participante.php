<?php 

$username="infochincha@infochincha20";
$password="Info_chincha";
$database="infochincha";
$link = new mysqli("infochincha20.mysql.database.azure.com",$username, $password, $database);

if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">>
	 <style type="text/css">
    	body{
    		background: white;
    	}

        #cuadro{
            position: relative;
            border-radius: 10px;
            width:50%;
            height: 60px;
            margin-left: auto;
            margin-right: auto;
            top: 20px;
            bottom: auto;
            display: flex;
            justify-content: center;
            align-content: center;
            flex-direction: column;
            background-color:#393939;
            text-align: center;
            font-size: 20px;font-family: 'Work Sans', sans-serif;
            -webkit-animation-name: animacion1;
            -webkit-animation-duration:3s;
            -webkit-animation-iteration-count:infinite;
            -webkit-animation-direction:alternate;
            -webkit-animation-timing-function:ease-in-out;
            color:white;
            /*-webkit-animation-delay:1s;*/

        }
/*        @-webkit-keyframes animacion1{
            0%{
                left:-100px;
               
            }
           
            100%{
                left:150px;
                
                
            }
        }
*/
        #CENTRAL{
        	position: relative;
        	background: blue; 
        	width:1380px;
        	margin:0 auto;
        	top:130px;
        }
        #tarjeta{
        	background: #4100f7;
        	
        	position: relative;
        	width: 150px;
        	height: 150px;
        	float:left;
        	border-radius:8px;
        	margin-left:20px;
        	margin-bottom:20px;
        }
        
        #nombre{
        	position: relative;
        	background: #5C5C5C;
        	color:white;
        	border-radius: 8px;
        	text-align: center;
        	width: 100%;
        	height: 100%;
        	opacity: 90%;
  			display: table;
   			align-items: center;
   			text-align:center;
   			line-height:150px;
        }
        
       
        #nombre p{
        	
        display:inline-block;
		vertical-align:middle;
		line-height:normal;
		font-size: 20px;
		font-family: 'Work Sans', sans-serif;
		
        }

        #nombre:hover{
        	transition: opacity 0.3s;
        	opacity: 10%;
        	
        }
        img{
        	position:absolute;
        	width: 150px;
        	height: 150px;
        	display: table-cell;
        	vertical-align:middle;
    		text-align:center;
    		border-radius: 10px;
        }

        #random{
        	background: #4100f7;
        	border:none;
        	color: white;
        	cursor: pointer;
        	position: relative;
        	width:160px;
        	height: 160px;
        	margin:0 auto;
        	display: flex;
        	font-size: 30px;
        	top:60px;
            justify-content: center;
            align-content: center;
            border-radius:148px;
            text-align: center;
            vertical-align: middle;
transition: background 0.3s;
outline-offset: 0;outline:none
        }
        #random:hover{
        	
        	background: #B4DB00;
        	color:white;

        }
        #numero-aleatorio{
  			position: absolute;
  			font-size:150px;
  			font-weight: 700;
  			text-align:center;
  			left: 20px;
  			bottom:50px;
  			color:#4100f7;user-select: none;font-family: 'Work Sans', sans-serif;
  			
		}
		#nay{
			position: relative;
        	background: #4100f7;
        	color:white;
        	border-radius: 8px;
        	text-align: center;
        	width: 100%;
        	height: 100%;
        	opacity: 90%;
  			display: table;
   			align-items: center;
   			text-align:center;
   			line-height:150px;
		}
		#nay p{
        	
        display:inline-block;
		vertical-align:middle;
		line-height:normal;
		font-size: 20px;
	font-family: 'Work Sans', sans-serif;
		
        }

        #nay:hover{
        	transition: opacity 0.3s;
        	opacity: 10%;
        	
        }
    </style>
</head>
<body>
	

	<?php 
		$envio= "SELECT * FROM participante";
		$consulta=mysqli_query($link,$envio);
		$ran="0";	
		if (isset($_POST['random'])) 
			{	$ran=rand(10,300);;
				while ($fila =mysqli_fetch_array($consulta)) {
 				$i=$fila['id'];
			}	
				$ran=rand(10,$i);
		}	
	 ?>

	<script type="text/javascript">
 		$(document).ready(function(){
		setInterval(
		function(){
			$('#cuadro').load('prueba.php')
			},1000
			);
	});
	</script>
	
	<div id="cuadro">
       	 	BIENVENIDOS AL SORTEO
   	</div>
	 
   	<form action="participante.php" method="post">
		<input type="submit" name="random" value="SORTEAR" id="random">
		</form>
	
	<div id="CENTRAL" >
		<div id="numero-aleatorio"><?php echo $ran; ?></div>
   	<?php
   	$consulta= "SELECT * FROM participante";
	$datos=mysqli_query($link,$consulta);
	$gana=0;
		while ($fila =mysqli_fetch_array($datos)) {
 			$ima=$fila['imagen'];
 			$name=$fila['nombres'];
 			$id=$fila['id'];
 			if ($id!=$ran) {
 				$ide="nombre";
 				
 				}
 			else{
 			$ide="nay";
 			$gana=$fila['dni']."<br>".$fila['nombres']."<br>".$fila['apellidos']."<br>".$fila['distrito'];
 			}
 	 		echo"<div id='tarjeta'><img src='$ima';>
    			<div id='$ide'>

    				<p>$id <br/>$name </p>		
    			</div>	
			</div>";
} 
mysqli_close($link);
  ?>
  <style type="text/css">
  	#ganador{
  		position: absolute;
  		
  		bottom:45px;
  		right:15px;
  		font-size: 30px;
  		background:#E4E4E4;
  		border-radius:8px;
  		font-family: 'Work Sans', sans-serif;
  		text-align: center;
  	}
  	#gana{
  		position: relative;
  		bottom: 15px;
  		background: white;
  		color:black;
  	}
  </style>
	<div id="ganador"><p id="gana">GANADOR</p><?php echo $gana; ?></div>
	
    
 <!--    <div id="tarjeta">
	<img src="https://scontent-lim1-1.xx.fbcdn.net/v/t1.0-9/95957278_976209036128106_5483503863426187264_n.png?_nc_cat=102&_nc_sid=8024bb&_nc_eui2=AeFJrCEDoLvs0kxhLpjMGPjLNqdGq_iYXmY2p0ar-JheZpscoRO9wn49QxMqBn4UpAsNL_85hKISwwxanwfj9WPZ&_nc_ohc=NlQXmKgwd-QAX9pwrx3&_nc_ht=scontent-lim1-1.xx&oh=34b57c3265f8de6f3bfec2e9d560f4bb&oe=5ED54CBB">
    	<div id="nombre" >
    		<p>HOLA</p>
    	</div>	
	</div> -->

</div>
</body>

</html>