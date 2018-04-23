<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Proyectos</title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
  	<script type="text/javascript" href ="./js/scripts.js"></script>
  </head>
  <body>
    <h3>Proyectos..!!</h3>
    <?php
      header("Content-Type: text/html; charset=utf-8");
      //Conexión a la base de datos
      $con = mysqli_connect("localhost","root","");
      mysqli_select_db($con, "proyectos")or die("No se pudo conectar con la base de datos.");

      $re = mysqli_query($con, "SELECT * FROM `proyectos`") or die(mysqli_error());
    ?>
    <input type="button" value="Nuevo Proyecto..!"></input>
    <tr>
      <td></td>
    </tr>
  </body>
</html>
