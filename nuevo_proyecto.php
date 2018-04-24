<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  	<title>Nuevo Proyecto</title>
  	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script type="text/javascript"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
  </head>
  <body>
    <h3>Nuevo Proyecto</h3>
    <?php
    header("Content-Type: text/html;charset=utf-8");
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "proyectos")or die("No se pudo conectar con la base de datos.");
    ?>

    <div>
      <form action="subir_bd.php" method="post">
        <label for="nombre"><strong>Nombre: <strong></label>
          <input required name="nombre" type="text" placeholder="Nombre del proyecto"></input>
        <br><br>
        <label for="responsable"><strong>Responsable: <strong></label>
          <input required name="responsable" type="text" placeholder="Responsable del proyecto"></input>
        <br><br>
        <label for="descripcion"><strong>Descripción: <strong></label>
          <input required name="descripcion" type="text" placeholder="Descripción del proyecto"></input>
        <br><br>
        <label for="prioridad"><strong>Prioridad: <strong></label>
          <input required name="prioridad" type="number" placeholder="Introduce un número entero"></input>
        <br><br>
        <label for="puntos"><strong>Points: <strong></label>
          <input required name="puntos" type="number" placeholder="Introduce un número entero impar"></input>
        <br><br>
        <label for="tipo_proyec"><strong>Tipo: <strong></label>
          <input required name="tipo_proyec" type="text" placeholder="Tipo de proyecto"></input>
        <br><br>
        <label for="fecha"><strong>Fecha: <strong></label>
          <input required name="fecha" type="date" placeholder="Fecha de la creación"></input>
        <br><br>
      </form>
    </div>
    <br>

    <input id="enviar" type="submit" name="enviar" value="Enviar datos"></input>
    <a href="./index.php" id="regresar_inicio"><strong>Volver a Inicio</strong></a>

    <?php
      header("Content-Type: text/html; charset=utf-8");
      //Conexión a la base de datos
      $con = mysqli_connect("localhost","root","");
      mysqli_select_db($con, "proyectos")or die("No se pudo conectar con la base de datos.");
    ?>

  </body>

  <script>
  </script>

</html>
