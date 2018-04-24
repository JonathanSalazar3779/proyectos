<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detalles proyecto</title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript"></script>
    <link rel="stylesheet" media="screen" href="./css/handsontable.full.css" />
    <script src="js/handsontable.full.js"></script>
  </head>
  <body>

    <?php
    header("Content-Type: text/html;charset=utf-8");
    $con = mysqli_connect("localhost","root","","proyectos");

    $re=mysqli_query($con, "SELECT * FROM `principal` WHERE `id`=".$_GET['id'])or die(mysqli_error());
    while ($f=mysqli_fetch_array($re)) {
    ?>
      <div id="resultados"></div>

      <script type="text/javascript">
        datosLenguajes = [
          [1,2,1,4,5],
          [2,1,2,5,7],
          [1,2,3,7,6]];

        configuracion = {
          data: datosLenguajes,
          colHeaders: ['Java','C','C++','C#','Python'],
          rowHeaders: ["2017","2012", "2007"]
        };

        tblExcel = new Handsontable(document.getElementById('resultados'), configuracion);
        tblExcel.render();
      </script>
  </body>
</html>
