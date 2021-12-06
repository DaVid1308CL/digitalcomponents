<?php

include_once 'conexion.php';
$stmt = $dbh->prepare("INSERT INTO usuario (nomusu, apeusu, emausu, pasusu, Telefono) VALUES (?, ?, ?, ?, ?)");
//bind

$nombre =$_POST['nombre'] ;
$apellido =$_POST['apellido'] ;
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$telefono=$_POST['telefon'];

$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $apellido);
$stmt->bindParam(3, $correo);
$stmt->bindParam(4, $contraseña);
$stmt->bindParam(5, $telefono);

// Excecute
$stmt->execute();
if($stmt == TRUE)  echo "<script> window.location.href = 'index.php';</script>";
else echo "Algo salió mal. Por favor verifique el error";

?>