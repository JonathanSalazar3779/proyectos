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

      <h4 style="margin-top: 20px"><?php echo $f['Nombre_proyecto'];?></h4>

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
              allowEmpty: false,
              //para configuracion avanzada del día
              datePickerConfig:{
                //primer día de la semana
                firstDay: 0, //domingo, lunes = 1
                showWeekNumber: true,
                numberOfMonths: 4
              }
            },

            {type: 'checkbox',
              //1, para si activada, 2 para no activada!!!
              checkedTemplate: '1',
              uncheckedTemplate: '0'
            }
          ]
        };

        tblExcel = new Handsontable(document.getElementById('resultados'), configuracion);
        tblExcel.render();

        <?php
            //La idea general es guardar en variables el contenido del handsontable
            //para que después manipularlo para poder ahora sí, hacer una consulta en sql
            //de tipo "UPDATE" y así se puedan gaurdar os nuevos datos ya actualizados

            //Otra sería explorar la opción de EditorManager del Handsontable

            //$id = $f['Id'];
            //$nombre = $f['Nombre_proyecto'];
            //$responsable = $f['Nombre_responsable'];
            //$fecha = $f['Fecha_Creacion'];
            //$desc = $f['Descripcion'];
            //$prioridad = $f['Prioridad'];
            //$points = $f['Points'];
            //$tipo = $f['Tipo'];
            //$activo = $f['Activo'];
          }
        ?>

        </script>

        <a href="index.php" id="cancelar">Cancelar</a>
        <a href="index.php" onclick="actualizar()" id="guardar">Guardar</a>

        <script type="text/javascript">
        //La funcion si sirve... bueno, con alert pero si la reconoce
          function actualizar(){
            //No creo que haga algo, estamos guardando el mismo elemento y actuaizandolo es el mismo

            //$con2 = mysqli_connect("localhost","root","", "proyectos");
            //mysqli_query($con2, "UPDATE 'proyecto' SET 'Nombre_proyecto' = '$nombre' WHERE 'proyecto'.'Id' = '$id'");

            //Aquí poder incrustrar propiedades de Handsontable para poder guardar los datos en la BD
            //var obj1 = new Handsontable.EditorManager();

            //probar funcionamiento de la función
            //alert('Gracias!!..');
          }
        </script>
  </body>
</html>
