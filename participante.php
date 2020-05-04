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
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	 <style type="text/css">
    	/*body{overflow: hidden}*/
    	body{
    		background: #6d0505;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #6d0505, #ff0000);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #6d0505, #ff0000);
    	}
    	
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
        	position: relative;
        	background: white; 
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
        	background: white;
        	color:#808080;
        	border-radius: 8px;
        	text-align: center;
        	width: 100%;
        	height: 100%;
        	
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
		font-family: 'Raleway', sans-serif;
        }

        #nombre:hover{
        	transition: opacity 0.3s;
        	opacity: 0;
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


    </style>
</head>
<body >

	<?php 
		if (isset($_POST['random'])) {
			$ran=rand(10,100);
			$result=$ran;
}
	 ?>
	<input type="submit" name="random" value="sads">
	<?php
		if (isset($_POST['random'])) {
			echo $result;
		}
	?>
		
	</input>
	<div id="cuadro">
        HOLI
   	</div> 
	<div id="CENTRAL" >

   	<?php
   	$consulta= "SELECT * FROM participante";
	$datos=mysqli_query($link,$consulta);
while ($fila =mysqli_fetch_array($datos)) {
 	$ima=$fila['imagen'];
 	$name=$fila['nombres'];
 	$id=$fila['id'];

 	 echo"<div id='tarjeta'><img src='$ima';>
    		<div id='nombre' >
    			<p>$id </p>
    			
    		</div>	
		</div>";
} 
mysqli_close($link);
  ?>

	
    
    <div id="tarjeta">
	<img src="https://scontent-lim1-1.xx.fbcdn.net/v/t1.0-9/95957278_976209036128106_5483503863426187264_n.png?_nc_cat=102&_nc_sid=8024bb&_nc_eui2=AeFJrCEDoLvs0kxhLpjMGPjLNqdGq_iYXmY2p0ar-JheZpscoRO9wn49QxMqBn4UpAsNL_85hKISwwxanwfj9WPZ&_nc_ohc=NlQXmKgwd-QAX9pwrx3&_nc_ht=scontent-lim1-1.xx&oh=34b57c3265f8de6f3bfec2e9d560f4bb&oe=5ED54CBB">
    	<div id="nombre" >
    		<p>HOLA</p>
    	</div>	
	</div>

</div>
</body>
</html>