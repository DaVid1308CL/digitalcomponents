<?php
  
	if(isset($_POST["enviar"])) {

       
		require("conexion.php");
 
			$loginNombre = $_POST["correo"];
			//$loginPassword = md5($_POST["password"]);
            $loginPassword = $_POST["contraseña"];
			$stmt = $dbh->prepare("SELECT * FROM usuario WHERE emausu='$loginNombre' AND pasusu='$loginPassword'");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			// Ejecutamos
			$stmt->execute();
		
				while ($row = $stmt->fetch()) {
 
					$usu = $row["emausu"];
					$pass = $row["pasusu"];
					echo $usu;
 					echo $pass;
				}
				//$resultado->close();
			
	
 
 
			//if(isset($loginNombre) && isset($loginPassword)) {
 
				if($loginNombre = $usu AND $loginPassword = $pass) {
 
					session_start();
					$_SESSION["logueado"] = TRUE;
					header("Location: index2.php");
 
				}
				else {
					Header("Location: index.php");
				}
 
		/*	}
 
		} else {
			header("Location: inicial.php");
		}*/
	}
 ?>