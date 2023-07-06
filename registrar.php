<?php

$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
$hora = isset($_POST['hora']) ? $_POST['hora'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$hermanos_fi = isset($_POST['hermanos_fi']) ? $_POST['hermanos_fi'] : '';
$visitas_fi = isset($_POST['visitas_fi']) ? $_POST['visitas_fi'] : '';
$ninos_fi = isset($_POST['ninos_fi']) ? $_POST['ninos_fi'] : '';
$hermanos_fii = isset($_POST['hermanos_fii']) ? $_POST['hermanos_fii'] : '';
$visitas_fii = isset($_POST['visitas_fii']) ? $_POST['visitas_fii'] : '';
$ninos_fii = isset($_POST['ninos_fii']) ? $_POST['ninos_fii'] : '';
$hermanos_fiii = isset($_POST['hermanos_fiii']) ? $_POST['hermanos_fiii'] : '';
$visitas_fiii = isset($_POST['visitas_fiii']) ? $_POST['visitas_fiii'] : '';
$ninos_fiii = isset($_POST['ninos_fiii']) ? $_POST['ninos_fiii'] : '';
$total_hermanos = isset($_POST['total_hermanos']) ? $_POST['total_hermanos'] : '';

try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=bd_asistencia", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO datos(fecha, hora, tipo, hermanos_fi, visitas_fi, ninos_fi, hermanos_fii,  visitas_fii, ninos_fii, hermanos_fiii, visitas_fiii, ninos_fiii, total_hermanos) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $pdo->bindParam(1, $fecha);
    $pdo->bindParam(2, $hora);
    $pdo->bindParam(3, $tipo);
    $pdo->bindParam(4, $hermanos_fi);
    $pdo->bindParam(5, $visitas_fi);
    $pdo->bindParam(6, $ninos_fi);
    $pdo->bindParam(7, $hermanos_fii);
    $pdo->bindParam(8, $visitas_fii);
    $pdo->bindParam(9, $ninos_fii);
    $pdo->bindParam(10, $hermanos_fiii);
    $pdo->bindParam(11, $visitas_fiii);
    $pdo->bindParam(12, $ninos_fiii);
    $pdo->bindParam(13, $total_hermanos);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}