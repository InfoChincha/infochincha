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
  <link rel="stylesheet" type="text/css" href="participante.css">
</head>
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
<body>
	 <div id="crono">
   	 <input id="botonReiniciar" type="button" value="GO" />
    <div id="cronometro" style="">00:00</div>
   </div>

	<?php 
		
		 $envio="select * from participante";
		$consulta=mysqli_query($link,$envio);
		$ran="0";	
		if (isset($_POST['random'])) 
			{	
				while ($fila =mysqli_fetch_array($consulta)) {
 				
 				$i=$fila['id'];
			}	
				$ran=219;
		}	
	 ?>


	
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