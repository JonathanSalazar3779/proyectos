<?php

if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {

    $nombre = $_POST['nombre'];

    $db_connection = mysqli_connect("localhost", "root", "", "proyectos");

    mysqli_query($db_connection, "INSERT INTO `principal` (`Id`, `Nombre_proyecto`) VALUES (NULL, '$nombre')");

}
else {
  echo "<h3>Verifica los datos, porfavor.</h3>";
}
?>
