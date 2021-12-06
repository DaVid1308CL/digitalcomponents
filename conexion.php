<?php
    $dbname="sistema_dc";
    $user="root";
    $password="";
    try {
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        
     $dbh = new PDO($dsn, $user, $password);
        //echo "CONECTADO CON LA BASE DE DATOS";
   } catch (PDOException $e){
        echo $e->getMessage();

    }
?>