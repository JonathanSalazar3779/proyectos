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

    <!--Manipulacion de datos en las tablas-->
    <link rel="stylesheet" media="screen" href="js/pikaday/pikaday.css">
    <script data-jsfiddle="common" src="js/moment/moment.js"></script>
    <script data-jsfiddle="common" src="js/pikaday/pikaday.js"></script>

  </head>
  <body>

    <?php
    header("Content-Type: text/html;charset=utf-8");
    //Conexion a la bas de datos
    $con = mysqli_connect("localhost","root","","proyectos");

    //hago que la consulta se obtenga mediante el id escogido segun el boton presionado
    $re = mysqli_query($con, "SELECT * FROM `principal` WHERE `Id`=".$_GET['id'])or die(mysqli_error());
    while ($f=mysqli_fetch_array($re)) {
    ?>
      <div id="resultados"></div>

      <script>
        datosBD = [
          ['1','Esquema Social', 'Jonathan Salazar', '3', '5', 'Planeado', '02/02/2018']
        ];

        configuracion = {
          data: datosBD,
          colHeaders: ['Id','Nombre del Proyecto','Responsable','Descripcion','Prioridad','Points','Tipo','Fecha Creación', 'Activo'],
          rowHeaders: true,
          columns: [
            {type: 'numeric'},
            {},
            //para un combo box
            {type: 'dropdown'},
            {},
            {type: 'numeric'},
            {type: 'numeric'},
            //para un combo box
            {type: 'dropdown'},
            {type: 'date'},
            {type: 'checkbox'}
          ]
        };

        tblExcel = new Handsontable(document.getElementById('resultados'), configuracion);
        tblExcel.render();

        <?php
          }
          /*
          $f['Id'],
          $f['Nombre_proyecto'], $f['Nombre_responsable'],
          $f['Descripcion'], $f['Prioridad'], $f['Points'],
          $f['Tipo'], $f['Fecha_Creacion'], $f['Activo']*/
        ?>
        </script>

        <a href="index.php" id="cancelar">Cancelar</a>
        <input type="submit" onclick="" value="Guardar" id="guardar"></input>

  </body>
</html>
