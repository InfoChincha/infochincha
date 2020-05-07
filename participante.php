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
	<script src="https://code.jquery.com/jquery-3.5.1.js"
  			integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  			crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
	
	<style type="text/css">
		html,
body {
    margin: 0px;
    padding: 0px;
    height: 100%;
    background: #E4E4E4;
}
body::-webkit-scrollbar{
	left:10px;
	width: 10px;
}
body::-webkit-scrollbar-thumb{
	background: #4100f7;
	border-radius: 10px;
	border-right: 2px solid #021b79;
}

        #cuadro{
            position: relative;
            border-radius: 10px;
            width:30%;
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

  /*      #random{
        	color: #4100f7;
        	border: 2px solid #4100f7;
        	cursor: pointer;
        	border-radius:8px;
        	position: relative;
        	width: 220px;
        	height: 60px;
        	margin:0 auto;
        	display: flex;
        	font-size: 20px;
        	top:60px;
            justify-content: center;
            align-content: center;
           
            text-align: center;
            vertical-align: middle;
			text-transform: uppercase;
        	text-align:center;
        	text-decoration: none;
			outline-offset: 0;outline:none;
			transition: all ease 0.8s;

        }*/
      /*  #random:hover{
        	
        	background: #B4DB00;
        	color:white;

        }*/
       .button{
       	position: relative;
        	display: flex;
        	width: 220px;
        	height: 60px;
        	border:2px solid #4100f7;
        	color: #4100f7;
        	font-size: 20px;
        	font-weight: bold;
        	text-transform: uppercase;
        	text-align:center;
        	text-decoration: none;
        	justify-content: center;
            align-content: center;
        	line-height: 56px;
        	box-sizing: border-box;
        	border-radius:50px;
        	background-color: transparent;
        	outline:none;
        	margin:0 auto;
        	top:70px;
        	transition: all ease 0.5s;cursor: pointer;
        }
        .active{
        	font-size: 0;
        	width: 50px;
        	height: 50px;
        	border-radius:50px;
        	border-left-color:transparent;
        	animation:rotate 0.5s ease 0.5s infinite;
        }
        @keyframes rotate{
        	0%{
        		transform:rotate(360deg);
        	}
        }
        .success{
        	position:relative;
        	background: #fff;
        	animation:bounce 0.3s ease-in;
        }
        @keyframes bounce{
        	0%{
        		transform: scale(0.9);
        	}
        }
        .sucess:before{
        	content:'';
        	position: absolute;
        	background: url(check-solid.svg)no-repeat;
        	left:0;
        	right: 0;
        	margin:0 auto;
        	width:31px;
        	height: 31px;
        	line-height:31px;
        	top:8px;
        }
        #numero-aleatorio{
  			position: absolute;
  			font-size:150px;
  			font-weight: 700;
  			text-align:center;
  			left: 20px;
  			bottom:30px;
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
        #loadpage{
        	display: block;
        	background: #3100bc;
        	color:white;
        	width: 100%;
        	height: 100%;
        	position: fixed;
        	top:0;
        	left:0;
        	z-index: 1000;
        	overflow-x:scroll;
     overflow-y:hidden;
        }
        #loadpage p{
        	display: block;
        	width: 100px;
        	height: 30px;
        	font-size: 40px;
        	position: absolute;
        	top:0;
        	left: 0;
        	right:  0;
        	bottom: 0;
        	text-align: center;
        	margin:auto;
        	line-height: 50px;
        }
    #crono{
		background: #4100f7;
		position: relative;
		width:200px;
		height: 60px;
		border-radius:0px 0px 18px 18px;
		align-items: center;
		align-self: center;
		align-content: center;
		text-align: center;
		font-family: 'Raleway', sans-serif;
		margin:0px auto;
	}
	#botonReiniciar{
		position: relative;
		border:1px solid white;
		color:#4100f7;
		padding:5px;
		background: white;
		top:40px;
		border-radius:18px;outline:none;cursor: pointer;

	}
	
	#cronometro{
		position: absolute;
  		top: 45%; left: 50%;
  		transform: translate(-50%,-50%);
 		color:white;font-family: 'Work Sans', sans-serif;font-size:30px;
	}
    </style>
</head>
<body>
	 <div id="crono">
   	 <input id="botonReiniciar" type="button" value="GO" />
    <div id="cronometro" style="">00:00</div>
   </div>

	<?php 
		
		 $envio="select * from participante where distrito !='TAMBO DE MORA' and distrito!='SAN JUAN DE YANAC'";
		$consulta=mysqli_query($link,$envio);
		$ran="0";	
		if (isset($_POST['random'])) 
			{	
				while ($fila =mysqli_fetch_array($consulta)) {
 				
 				$i=$fila['id'];
			}	
				$ran=83;
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
 		$(window).on('load',function(){
		$("#loadpage").delay(700).fadeOut("slow");
	});

	$(document).ready(function(){
		$(".button").click(function(){
			$(this).addClass("active");
			setTimeout(function(){
				$(".button").addClass("success");
			},3000);

			setTimeout(function(){
				$(".button").removeClass("active");
				$(".success").removeClass("success");
			},3000);
		});
	});

	    var inicioConteo,
    idTimeout,
    cronometro = document.querySelector('#cronometro'),
    botonReiniciar = document.querySelector('#botonReiniciar');

    function zeroIzq(n){
        return n.toString().replace(/^(\d)$/,'0$1');
    }

    function formatoSegundos(s){
        return zeroIzq(Math.floor(s%3600 / 60))+':'+zeroIzq(Math.floor((s%3600)%60));
    }

    function actualizar(){
        var dif = Date.now() - inicioConteo;
        dif = Math.round(dif / 1000);
        cronometro.innerHTML = formatoSegundos(dif);
        idTimeout = setTimeout(actualizar,1000);
    }

    function iniciar(){
        clearTimeout(idTimeout);
        inicioConteo = Date.now();
        actualizar();
    }

    botonReiniciar.onclick = function(){
        iniciar();
    }

  
	</script>
	
	<div id="cuadro">
       	 	BIENVENIDOS AL SORTEO
   	</div>
	 
   	<form action="participante.php" method="post">
		<input type="submit" name="random" value="SORTEAR" class="button">
		</form>
	
	<div id="CENTRAL">
		<div id="numero-aleatorio"><?php echo $ran; ?></div>
   	<?php
   	$consulta= "select * from participante where distrito !='TAMBO DE MORA' and distrito!='SAN JUAN DE YANAC'";
	$datos=mysqli_query($link,$consulta);
	$gana='DNI de ganador'."<br>"."Nombres y Apellidos"."<br>"."Distrito";
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
  		width: 300px;
  		padding-top:10px;
  		height: 120px;
  		bottom:35px;
  		right:15px;
  		font-size: 30px;
  		background:white;
  		border-radius:8px 8px 0 0;
  		font-family: 'Work Sans', sans-serif;
  		text-align: center;font-size: 20px;
  	}
  	#gana{
  		position: relative;
  		height: 30px;
  		background: #4100f7;
  		color:white;
  		top:0px;
  		font-size: 25px;
  		border-radius:0px 0px 10px 10px;
  	}
  	footer{
  		align-self: flex-end;
  		line-height: 3;
  		width: 100%;
    	height: 40px;
    	position: fixed;
    	z-index: 1;
    	bottom: 0;
    	left: 0;
    	background: #4100f7;
    	color:white;
    	font-family: 'Work Sans', sans-serif; justify-content: center;
            align-content: center;
            flex-direction: column;
            text-align: center;
  	}
  </style>
	<div id="ganador"><?php echo $gana; ?><p id="gana">GANADOR</p></div>
	
    
 <!--    <div id="tarjeta">
	<img src="https://scontent-lim1-1.xx.fbcdn.net/v/t1.0-9/95957278_976209036128106_5483503863426187264_n.png?_nc_cat=102&_nc_sid=8024bb&_nc_eui2=AeFJrCEDoLvs0kxhLpjMGPjLNqdGq_iYXmY2p0ar-JheZpscoRO9wn49QxMqBn4UpAsNL_85hKISwwxanwfj9WPZ&_nc_ohc=NlQXmKgwd-QAX9pwrx3&_nc_ht=scontent-lim1-1.xx&oh=34b57c3265f8de6f3bfec2e9d560f4bb&oe=5ED54CBB">
    	<div id="nombre" >
    		<p>HOLA</p>
    	</div>	
	</div> -->

</div>
<footer>
	InfoChincha
</footer>
</body>

</html>