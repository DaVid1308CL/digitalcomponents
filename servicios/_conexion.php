<?php
	//$con=mysqli_connect('localhost','root','','sistema_dc');

    $dbname="sistema_dc";
    $user="root";
    $password="";
    try {
        $con = "mysql:host=localhost;dbname=$dbname";
        $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        
     $dbh = new PDO($con, $user, $password);
      //  echo "CONECTADO CON LA BASE DE DATOS";
   } catch (PDOException $e){
        echo $e->getMessage();

    }

?>


