<?php

$username="infochincha@infochincha20";
$password="Info_chincha";
$database="infochincha";
$link = new mysqli("infochincha20.mysql.database.azure.com",$username, $password, $database);
$link2 = new mysqli("infochincha20.mysql.database.azure.com",$username, $password, $database);
if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
}

$mensaje="REGÍSTRATE FIEL";
if (isset($_POST['ENVIAR'])) {
  // $revisar = getimagesize($_FILES["foto"]["tmp_name"]);
  $dni = $_POST['DNI'];
  $nombres = $_POST['NOMBRES'];
  $apellidos = $_POST['APELLIDOS'];
  $distrito=$_POST['DISTRITO'];
  $descripcion = $_POST['DESCRIPCION'];
  $imagen = $_POST['IMAGEN'];
  $alldni="CALL fieles($dni);";
  $consulta=mysqli_query($link ,$alldni);

    // $revisar = $_FILES["IMAGEN"]["tmp_name"];
   //  if($revisar !== false){
   //      $image = $_FILES['IMAGEN']['tmp_name'];
   //      $imgContenido = addslashes(file_get_contents($image));
   //  }
   //  else{
   //   $imgContenido = "";
   //  }
  while ($fila =mysqli_fetch_array($consulta)){
    $user=$fila['nombres'];
  

    if ($user=="1") {//Esta vaina funciona a través de un PA, donde si devuelve cero es porque no hay dato del mismo dni, y uno porque si 
      $mensaje="PARTICIPANTE $nombres EXISTENTE";
      }
    elseif($user=="0"){
      
    

      $sql="INSERT INTO fieles(nombres,apellidos,dni,distrito,imagen,descripcion) values('$nombres','$apellidos','$dni','$distrito','$imagen','$descripcion'); ";
      if (mysqli_query($link2, $sql)) {
      $mensaje="BIENVENIDO AL SORTEO $nombres";
      }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link2);
    }}
      
}

$link-> close();

 } 
 // $result = $link->query("SELECT imagen FROM participante WHERE id = '5'");
    
 //    if($result->num_rows > 0){
 //        $imgDatos = $result->fetch_assoc();
        
 //        //Mostrar Imagen
 //        header("Content-type: image/jpg"); 
 //        echo $imgDatos['imagen']; 
 //    }else{
 //        echo 'Imagen no existe...';
 //    }



// else if(mysqli_error($conn)=="Duplicate entry '$dni' for key 'dni'"){
//  $mensaje="$user YA HA SIDO REGISTRADO";
// }
// else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//  }
  // $mensaje=$fila['nombres'];
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Manrope&display=swap" rel="stylesheet">
  <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css" MEDIA=screen>
  <style type="text/css">
    body{
      background:   #ff1e05;
    }
  </style>
</head>
<body>
  <table CLASS="ganador">
    <tr>
      <td align=center><?php echo "<p>". $mensaje."</p>" ?>
    </tr>
  </table>
  <form method="POST" action="fieles.php" enctype="multipart/form-data">
    <table align="center">
      <tr>
        <td align=center><input type="text" name="NOMBRES" required placeholder="INGRESAR NOMBRES" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
      </tr>
      <tr>
        <td align=center><input type="text" name="APELLIDOS" required placeholder="INGRESAR APELLIDOS" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
      </tr>
      <tr>
        <td align=center>
        <input type="text" name="DNI" placeholder="DNI" id="dni" required accesskey="d" maxlength="8" size="8"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false; ">
        </td>
      </tr>
      <!-- <tr>
        <td align=center>
        <input type="file" name="IMAGEN" id="dni"  accesskey="d" maxlength="8" size="8"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false; ">
        </td>
      </tr> -->
      <tr>
        <td align=center>
        <input type="text" name="IMAGEN" placeholder="IMAGEN" id="IMAGEN">
        </td>
      </tr>
      <tr>
        <td align=center>
        <input type="text" name="DESCRIPCION" placeholder="DESCRIPCION" required id="DESCRIPCION" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
        </td>
      </tr>
      
      
      <tr>
        <td align=center>
          <select name="DISTRITO" required>
          <option value="" selected>SELECCIONAR DISTRITO</option>
          <option value="PUEBLO NUEVO">PUEBLO NUEVO</option>
          <option value="SUNAMPE">SUNAMPE</option>
          <option value="CHINCHA BAJA">CHINCHA BAJA</option>
          <option VALUE="TAMBO DE MORA">TAMBO DE MORA</option>
          <option value="EL CARMEN">EL CARMEN</option>
          <option value="CHINCHA ALTA">CHINCHA ALTA</option>
          <option value="ALTO LARÁN">ALTO LARÁN</option>
          <option value="GROCIO PRADO">GROCIO PRADO</option>
          <option value="CHAVÍN">CHAVÍN</option>
          <option value="SAN PEDRO DE HUACARPANA">SAN PEDRO DE HUACARPANA</option>
          <option value="SAN JUAN DE YANAC">SAN JUAN DE YANAC</option>
        </select></td>
      </tr>
      <tr>
        <td align=center>
        <input type="submit" name="ENVIAR" placeholder="DNI" value="REGISTRAR">
        </td>
      </tr>
      <tr>
        <td align=center>
        <a href="">VER PARTICIPANTES</a>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>