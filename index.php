<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Proyectos</title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript"></script>
  </head>
  <body>
    <h3>Proyectos..!!</h3>
    <a href="./nuevo_proyecto.php" id="nuevo_proyec"><strong>Nuevo Proyecto</strong></a>
    <table style="margin-top: 7%; margin-bottom: 1%">
      <tr>
        <th style="font-family: 'Comic Sans'; font-size: 23px; color:MediumSeaGreen;">Id</th>
        <th style="font-family: 'Comic Sans'; font-size: 23px; color:MediumSeaGreen;">Nombre del Proyecto</th>
        <th style="font-family: 'Comic Sans'; font-size: 23px; color:MediumSeaGreen;">Fecha de Creación</th>
        <th style="font-family: 'Comic Sans'; font-size: 23px; color:MediumSeaGreen;">Ver Info</th>
      </tr>
    </table>
    <?php
      header("Content-Type: text/html; charset=utf-8");
      //Conexión a la base de datos
      $con = mysqli_connect("localhost","root","");
      mysqli_select_db($con, "proyectos")or die("No se pudo conectar con la base de datos.");

      $re = mysqli_query($con, "SELECT * FROM `principal`")or die("No se puede conectar con la tabla");
      while ($f=mysqli_fetch_array($re)) {
    ?>
    <table>
        <tr>
          <td><h4><?php echo $f['Id'];?></h4></td>
          <td><h4><?php echo $f['Nombre_proyecto']?></h4></td>
          <td><h4><?php echo $f['Fecha_Creacion']?></h4></td>
          <td><a href="ver_proyecto.php?id=<?php echo $f['Id'];?>"><strong>Ver Proyecto</strong></a></td>
        </tr>
      </table>
      <?php
        }
      ?>
    </table>
  </body>
</html>
