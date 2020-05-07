<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="canasta.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
    <title>InfoChincha</title>
    <link rel="icon" href="IMG/infochincha_icon.png">
    <style type="text/css">
    	*{overflow: hidden

        }
        html, body{
  height:100%
  margin :0px;border: 0px;
padding: 0px;
margin: 0px;
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
            overflow-x:hidden;
            overflow-y:hidden;
        }
        #loadpage p{
            display: block;
            width: 140px;
            height: 30px;
            font-size: 20px;
            position: absolute;
            top:0;
            left: 0;
            right:  0;
            bottom: 0;
            text-align: center;
            margin:auto;
            
        }
      
            .textos{
            background: red;
            }
            img{
                position: absolute;
                
                opacity: 10%;
                display: block;
                position: absolute;
                top:0;
                left: 0;
                right:  0;
                bottom: 0;
                margin:auto;
            }
            *{
            font-family: 'Raleway', sans-serif;
        }
        .caja{
            
            position: relative;
            width:600px;
            height: 700px;
            left:  890px;
            
            margin-right: 0;
            top:190px;
        }
        h1{
            font-size: 100px;
            color:#4100f7;font-family: 'Righteous', cursive;
            letter-spacing: 5px;
            user-select: none;
        }
        p{
            position: relative;
            bottom:40px;
            font-size: 20px;
            color:#5C5C5C;
            user-select: none;
        }
        a{
            position: relative;
            text-decoration: none;
            color:#4100f7;
            border:#4100f7 solid;
            padding: 10px;
            border-radius:8px;
            transition: all 0.3s;
        }
        a:hover{
            background: #4100f7;
            color:white;
        }
    </style>
</head>
<body background="c.png">   
    <div class="caja">
  <h1>GRAN <br>SORTEO</h1>
  <p>
   Sorteo de la canasta de víveres 2020.
   <br>Elaborado por InfoChincha.
  </p>
  <a href="participante.php">ENTRAR AL SORTEO</a>

</div>
    <script type="text/javascript">
        $(window).on('load',function(){
        $("#loadpage").delay(100).fadeOut("slow");
    });
    </script>
    <span id="loadpage" >
        <p>BIENVENIDO</p>
    </span>

</body>
</html>