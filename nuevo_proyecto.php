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
          <select name="responsable">
            <option value="jonathan salazar">Jonathan Salazar</option>
            <option value="pedro juarez">Pedro Juárez</option>
            <option value="sandra lopez">Sandra López</option>
          </select>
        <br><br>
        <label for="descripcion"><strong>Descripción: <strong></label>
          <input required name="descripcion" type="text" placeholder="Descripción del proyecto"></input>
        <br><br>
        <label for="prioridad"><strong>Prioridad: <strong></label>
          <select name="prioridad">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        <br><br>
        <label for="puntos"><strong>Points: <strong></label>
          <select name="puntos">
            <option value="1">1</option>
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="7">7</option>
            <option value="9">9</option>
            <option value="11">11</option>
            <option value="13">13</option>
          </select>
        <br><br>
        <label for="tipo_proyec"><strong>Tipo: <strong></label>
          <select name="tipo_proyec">
            <option value="planeado">Planeado</option>
            <option value="no_planeado">No planeado</option>
            <option value="bug">Bug</option>
            <option value="otro">Otro</option>
          </select>
        <br><br>
        <label for="fecha"><strong>Fecha: <strong></label>
          <input required name="fecha" type="date" placeholder="Fecha de la creación"></input>
        <br><br>
        <input required name="activo" type="checkbox"></input>
          <label for="activo"><strong>Activo: <em>Marca el botón para hacerlo activo</em></strong></label>
      </form>
    </div>
    <br>

    <input id="enviar" type="submit" name="enviar" value="Enviar datos"></input>
    <a href="./index.php" id="regresar_inicio"><strong>Volver a Inicio</strong></a>

  </body>

  <script>
  </script>

</html>
