<?php
include 'nuevo_proyecto.php';

if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['responsable']) && !empty($_POST['responsable']) &&
    isset($_POST['descripcion']) && !empty($_POST['descripcion']) &&
    isset($_POST['prioridad']) && !empty($_POST['prioridad']) &&
    isset($_POST['puntos']) && !empty($_POST['puntos']) &&
    isset($_POST['tipo_proyec']) && !empty($_POST['tipo_proyec']) &&
    isset($_POST['fecha']) && !empty($_POST['fecha'])) {

    $nombre = $_POST['nombre'];
    $responsable = $_POST['responsable'];
    $descripcion = $_POST['descripcion'];
    $prioridad = $_POST['prioridad'];
    $puntos = $_POST['puntos'];
    $tipo_proyec = $_POST['tipo_proyec'];
    $fecha = $_POST['fecha'];
    $activo = $_POST['activo'];

    $db_connection = mysqli_connect("localhost", "root", "", "proyectos");

    mysqli_query($db_connection, "INSERT INTO `principal` (`Id`, `Nombre_proyecto`, `Nombre_responsable`, `Descripcion`, `Prioridad`, `Points`, `Tipo`, `Fecha_Creacion`, `Activo`) VALUES (NULL, '$nombre', '$responsable', '$descripcion', '$prioridad', '$puntos', '$tipo_proyec', '$fecha', '$activo')");

}
else {
  echo "<h3>Verifica los datos, porfavor.</h3>";
}
?>
