<?php
session_start();
if( empty($_SESSION["num_doc"]) || empty($_SESSION["nombre"])|| empty($_SESSION["tipo_doc"])  ){

}else{
 echo $_SESSION["nombre"];   
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Digital Components</title>
	
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
     <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/segundo.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/formulario.css">
  
		<!-- SCRIPTS JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body>
    
 <!-- menu -->

 <header>
 <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/digital-components/index2.php"><img src="assets/logo.png" class="logo-place" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

	  </ul>
      <div class="search-place">
			<input type="text" name="busqueda" id="busqueda" placeholder="BUSCAR">
			<button name="boton" id="Buscar" value="Buscar Datos" class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
		</div>
        <!--aqui va el carrito-->
      <div class="options-place">
			<?php
			if (isset($_SESSION['codusu'])) {
				echo
				'<div class="item-option"><i class="fa fa-user-circle-o" aria-hidden="true"></i><p>'.$_SESSION['nomusu'].'</p></div>';
			}else{
			?>

 <!--aMODAL DE REGISTRARSE-->
                <div class="item-option" title="Registrate" data-toggle="modal" data-target="#exampleModal" >
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" >
              <div class="modal-content" >
                <div class="modal-header" style="padding: 6px;">
                        <div class="titulos">REGISTRATE</div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
               
                <div class="modal-body">
                            
                                <form method="POST" action="insertar.php" >
                                <input class="form-control form-control-lg" type="text" placeholder="NOMBRE" name="nombre">
                                <input class="form-control form-control-lg" type="text" placeholder="APELLIDO" name="apellido">
                                <input class="form-control form-control-lg" type="email" placeholder="CORREO" name="correo">
                                <input class="form-control form-control-lg" type="password" placeholder="CONTRASE??A" name="contrase??a">
                                <input class="form-control form-control-lg" type="number" placeholder="TELEFONO" name="telefon">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top:3%; margin-left:34%;">Close</button>
                                <button type="submit" class="btn btn-primary" style="margin-top:3%;" >ENVIAR</button>
                       
                </form>        
                </div>
                <div class="modal-footer">

                </div>
              </div>
            </div>
          </div>

          <script>
          $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
          })
          </script>

 <!--aMODAL DE INICIAR SECION-->
			<div class="item-option" title="Ingresar" data-toggle="modal" data-target="#modaling" >
      <i class="fa fa-sign-in" aria-hidden="true" class="carrocolor"  ></i>   
      </div>
      <div class="modal fade" id="modaling" tabindex="-1" aria-labelledby="modaling" aria-hidden="true">
            <div class="modal-dialog" >
              <div class="modal-content" >
                <div class="modal-header" style="padding: 6px;">
                        <div class="titulos" class="fondo1">INICIAR SESION</div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
               
                <div class="modal-body">
                            
                                <form method="POST" action="logueo.php">
                                <input class="form-control form-control-lg" type="email" placeholder="CORREO" name="correo">
                                <input class="form-control form-control-lg" type="password" placeholder="CONTRASE??A" name="contrase??a">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                <a href="#"> ??Olvidaste tu contrase??a? </a>
                                </small>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top:2%; margin-left:30%;">Close</button>
                                <button type="submit" class="btn btn-primary" style="margin-top:2%;" name="enviar">ENVIAR</button>
                       
                </form>        
                </div>
                <div class="modal-footer">

                </div>
              </div>
            </div>
          </div>

          <script>
          $('#modaling').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
          })
          </script>


			<?php
			}
			?>
      <!--CARRITO-->
			<div class="item-option" title="Mis compras">
				<a href="carrito.php" class="carrocolor"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
			</div>
		</div>
    </div>
  </div>
</nav>
</header>

 <!-- Segundo menu-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">

  </button>

  <div class="collapse navbar-collapse" id="navbarScroll" style="margin-left: 30%;">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;" >

      <li><a class="nav-link" href="#">Procesadores</a></li>
        <li><a class="nav-link" href="#">Memorias ram</a></li>
        <li><a class="nav-link" href="#">Perifericos</a></li>
        <li><a class="nav-link" href="#">Gabinetes</a></li>
        <li><a class="nav-link" href="#">Disco duro</a></li>
        <li><a class="nav-link" href="#">Refrigeracion</a></li>

    </ul>
  </div>
</nav>


 <!-- Bootstrap carousel-->
 
<div class="el_centro">
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="imgcarousel/procesador.jpg" class="contenido_img" alt="...">
        </div>

        <div class="carousel-item">
          <img src="imgcarousel/refrigeracion.jpg" class="contenido_img" alt="...">
        </div>

        <div class="carousel-item">
          <img src="imgcarousel/perifericos.jpg" class="contenido_img" alt="...">
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
    </div>
    </div>
    
   <!--busqueda -->
		<section id="tabla_resultado">
		<!-- -->
		</section>
    <script src="peticion.js"></script>

 <div class="container">
    <div class="bajar_eso">
<div class="main-content">
		<div class="content-page">
			<div class="title-section">Productos destacados</div>
			<div class="products-list" id="space-list">
			</div>
		</div>
	</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+= //las comillas simples hacen una concatenaci??n de cada linea
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/'+data.datos[i].rutimapro+'">'+
                  +'<br>'+ 
             
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
                  +'<br>'+ 
               
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list").innerHTML=html; //toma el objeto (space-list)
				},
				error:function(err){
					console.error(err);
				}
			});
		});
		function formato_precio(valor){

			let svalor=valor.toString(); //cadena de texto
			let array=svalor.split(".");
		//	return "$"+array[0]+"<span>"+array[1]+"</span>";
      return "$"+array[0];
		}
	</script>
  </div>
   </div>




 <!-- pie pagina -->

 <header >
 <nav class="navbar navbar-expand-lg navbar-light" style="margin-left: 15%;">

  <div class="container-fluid">

  <div class="collapse navbar-collapse" id="navbarScroll">



    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll">
      <li >
        <a class="nav-link" href="#">CONTACTENOS</a>
      </li >
      <li >
       <a class="nav-link" href="#">#CELULAR</a>
     </li>
     <li >
    <a class="nav-link" href="#">INFORMACION</a>
       </li>
    </ul>
    




    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll"  style="margin-right: 15%;">
    
      <li class="caj_i">
        <a class="nav-link" href="https://es-la.facebook.com/"  class="ajust_img"><img src="assets/face.jpg" alt="" class="ajust_img"></a>
      </li >

        <li  class="caj_i">
          <a class="nav-link" href="https://www.instagram.com/"  class="ajust_img"><img src="assets/insta.jpg" alt="" class="ajust_img" ></a>
        </li>

        <li   class="caj_i">
          <a class="nav-link" href="https://twitter.com/?lang=en" class="ajust_img"><img src="assets/twitter.jpg" alt="" class="ajust_img" ></a>
        </li><!---->
    </ul>    

    </div>
  </div>
</nav>
</header>





<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> 

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
	
</body>
</html>