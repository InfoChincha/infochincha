<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    </style>
</head>
<body background="c.png">
 
<!--     <div class="curved-div">
  <h1>InfoChincha</h1>
  <p>
   Sorteo de la canasta de víveres 2020.
   Elaborado por InfoChincha.
  </p>
  <svg viewBox="0 0 1440 319">
    <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg> -->
</div>
    <script type="text/javascript">
        $(window).on('load',function(){
        $("#loadpage").delay(1500).fadeOut("slow");
    });
    </script>
    <span id="loadpage" >
        <img src="logo.png">
    </span>
   
<!-- <object data="ejemplo.svg" type="image/svg+xml">
  
  <img src="pis.svg" alt="Imagen PNG alternativa">
</object> -->
</body>
</html>