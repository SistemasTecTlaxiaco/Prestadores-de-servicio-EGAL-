
<?php
  include ("correo.php");
  ?>
<?php
if (!isset($_GET["codigo"])) {
  exit();
}
$codigo = $_GET["codigo"];
require_once "../conexion.php";
$query = mysqli_query($conection,'SELECT * FROM registro where id_registro=?');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<?php include "includes/scripts.php"
?>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>Prestadores de Servicio EGAL</title>
	<link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
</head>
<body>
<?php include "includes/header.php" ?>
<br>
<br>
<br>
<br>
<br>
<div class="container">
<?php 
      require_once "../conexion.php"; 
      $query = mysqli_query($conection,"SELECT * FROM registro where id_registro='$codigo' ");
      foreach ($query as $conection){  

      }
      ?>
        
     
      <div class="col-md-6">
  <img src="../img/<?php echo $conection['foto']; ?>" class="item-fluid" style="width:300px; height:300px;" >
</div>

<div class="col-md-6">
<h1><?php echo  $conection['tipo_servicio']; ?></h1>
  <h2> <?php echo $conection['nombreCompleto']; ?> </h2>
  <h3>Dirección: <?php echo  $conection['direccion']; ?></h3>
  <h3>Gmail: <?php echo  $conection['email']; ?></h3>

 <h3 >Contacto: <span class="icocor1">&#128222;</span><?php echo  $conection['telefono']; ?></h3>
  <h3>Pago: <?php echo  $conection['pago']; ?></h3>
  <p> <center><?php echo $conection['descripcion']; ?></center></p>
 
     </div>
 
 
  <form  method=post name="formx" id="myForm">
<table width="300px">
<h4 class="sent-notification"


<tr>
 <td valign="top">
  <label for="emaildestino">Destino</label>
 </td>
 <td valign="top">
  <input placelholder="Para"  type="email" id="emaildestino" name="emaildestino" maxlength="50" size="30" required value ="<?= $conection['email']; ?>" >
 </td>
</tr>
 
<tr>
 <td valign="top">
  <label for="Apellido">Nombre</label>
 </td>
 <td valign="top">
  <input placelholder="Apellido"   type="text" id="Apellido" name="Apellido" maxlength="50" size="30" required="">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="asunto">Asunto</label>
 </td>
 <td valign="top">
  <input  placelholder="asunto"  type="text"  id="asunto" name="asunto" maxlength="70" size="30" required="">
 </td>
 
</tr>
<tr>
 <td valign="top">
  <label for="comentario">Mensaje</label>
 </td>
 <td valign="top">
  <textarea  placelholder="comentario"  id="comentario" name="comentario" maxlength="1000" cols="30" rows="6" required=""></textarea>
 </td>
 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input class="btn_search" type="submit" onclick="sendEmail()" value="Enviar" name="enviar">
  <div class="alert">
  <?php echo $alert;?>
    </div>
 </td>
 
<script type="text/javascript">
  if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href);
  }

</script>
</table>


</form>

      </div>
</body>
<style>
   
     .btn_search
    {
    background:  #0a4661;
    color: #fff;
    padding: 10 60px;
    border:30;
    cursor:pointer;
    margin-left: 20px;
    }
    .alert {
    
    color: Red;
    
}
  </style>
</html> 
