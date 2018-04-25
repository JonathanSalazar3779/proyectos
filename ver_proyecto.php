<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detalles proyecto</title>

    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript"></script>
    <link rel="stylesheet" media="screen" href="./dist/handsontable.full.css">
    <script src="./dist/handsontable.full.js"></script>

    <!--Manipulacion de datos en las tablas-->
    <link rel="stylesheet" media="screen" href="./dist/pikaday/pikaday.css">
    <script data-jsfiddle="common" src="./dist/moment/moment.js"></script>
    <script data-jsfiddle="common" src="./dist/pikaday/pikaday.js"></script>

  </head>
  <body>

    <?php
    header("Content-Type: text/html;charset=utf-8");
    //Conexion a la base de datos
    $con = mysqli_connect("localhost","root","","proyectos");

    //hago que la consulta se obtenga mediante el id escogido segun el boton presionado
    $re = mysqli_query($con, "SELECT * FROM `proyecto` WHERE `Id`=".$_GET['id'])or die(mysqli_error());
    while ($f=mysqli_fetch_array($re)) {
    ?>
      <h4><?php echo $f['Nombre_proyecto'];?></h4>

      <div id="resultados"></div>

      <script>
        datosBD = [
          ['<?php echo ($f['Id']);?>','<?php echo ($f['Nombre_proyecto']); ?>',
            '<?php echo ($f['Nombre_responsable']); ?>','<?php echo ($f['Descripcion']); ?>', '<?php  echo ($f['Prioridad']);?>',
            '<?php  echo ($f['Points']);?>','<?php echo ($f['Tipo']); ?>', '<?php echo ($f['Fecha_Creacion']); ?>',
            '<?php echo ($f['Activo']); ?>']
        ];

        configuracion = {
          data: datosBD,
          colHeaders: ['Id','Nombre del Proyecto','Responsable','Descripcion','Prioridad','Points','Tipo','Fecha Creación', 'Activo'],
          rowHeaders: true,
          columns: [
            {type: 'numeric'},
            {},
            //para un combo box
            {type: 'dropdown',
              source: ['Jonathan Salazar', 'Sebastian Elvira', 'Monica Naranjo']
            },
            {},
            {type: 'numeric'},
            {type: 'dropdown',
              source: ['1','3','5','7','9','11','13']
            },
            //para un combo box
            {type: 'dropdown',
              source: ['Planeado', 'No planeado', 'Bug', 'Otro']
            },
            {type: 'date',
              dateFormat: "DD/MM/YYYY",
              correctFormat: true,
              defaultDate: "01/05/2018",
              allowEmpty: false,
              //para configuracion avanzada del día
              datePickerConfig:{
                //primer día de la semana
                firstDay: 0, //domingo, lunes = 1
                showWeekNumber: true,
                numberOfMonths: 4,
              }
            },
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
        <input onclick="" value="Guardar" id="guardar"></input>

  </body>
</html>
