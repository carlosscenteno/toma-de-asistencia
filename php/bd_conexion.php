<?php
// $username ="root";
// $password1 = "";
// $hostname = "localhost";
// $dbName = "bd_asistencia";

// $conexion=mysqli_connect($hostname,$username,$password1,$dbName) or
// print "Error en la Conexi&oacute;n";

$conexion =mysqli_connect("localhost","root","","bd_asistencia");

mysqli_set_charset($conexion, "utf8");

?>