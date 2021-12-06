<?php

include('../_conexion.php');


$response=new stdClass();
//$datos=array(); (tambiense puede usar)
$datos=[];
$i=0;
// $sql="select * from producto where estado=1";
$stmt = $dbh->prepare("SELECT * FROM producto WHERE estado=1");
// Especificamos el fetch mode antes de llamar a fetch()
$stmt->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
$stmt->execute();
// $result=mysqli_query($con,$sql);
while ($row = $stmt->fetch()){

	$obj=new stdClass();
	$obj->codpro=$row['codpro'];
	$obj->nompro=$row['nompro'];
	$obj->despro=$row['despro'];
	$obj->prepro=$row['prepro'];
	$obj->rutimapro=$row['rutimapro'];
	$datos[$i]=$obj; //sirve para guardar en la variable 
	$i++;
}
/*
while($row=mysqli_fetch_array($result)){

	$obj=new stdClass();
	$obj->codpro=$row['codpro'];
	$obj->nompro=$row['nompro'];
	$obj->despro=$row['despro'];
	$obj->prepro=$row['prepro'];
	$obj->rutimapro=$row['rutimapro'];
	$datos[$i]=$obj; //sirve para guardar en la variable 
	$i++;
}
*/


$response->datos=$datos;

//mysqli_close($con);
header('Content-Type: application/json'); //muestra que es tipo json
echo json_encode($response); //muestre la respuesta en tipo json


?>
