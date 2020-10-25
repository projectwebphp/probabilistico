<?php
require_once("../Controlador/Controlador.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Probabilístico</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->

    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Probabilístico </div>
      <div class="list-group list-group-flush">
      <!--
        <a onclick="mostrarVista('ruta')" href="#" id="GestionarUsuarios" class="list-group-item list-group-item-action bg-light">Gestionar Usuarios</a>
      -->
        <a href="MenuEntidad.php?GestionarRoles" id="GestionarRoles" class="list-group-item list-group-item-action bg-light">Gestionar Roles</a>
        <a href="MenuEntidad.php?GestionarUsuarios" id="GestionarUsuarios" class="list-group-item list-group-item-action bg-light">Gestionar Usuarios</a>
        <a href="MenuEntidad.php?GestionarPersonalFuerza" id="GestionarPersonalFuerza" class="list-group-item list-group-item-action bg-light">Gestionar Personal Fuerza</a>
        <a href="MatrizCalculos.php" class="list-group-item list-group-item-action bg-light">Desarrollo Marlon.</a>
      </div>
    </div>

    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <!--
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
-->
<a href="https://consultoresasociados.com.co/">
<img src="../img/logo.jpg" style="width:50px;50px"></img>
</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="CerrarSesion.php">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
       <!-- <h1 class="mt-4">Probabilístico</h1>-->
        <div class="container">
        <?php
          $Controlador = new Controlador();
          if(isset($_GET["GestionarUsuarios"])){
            $Controlador->DesplegarVista("../Vista/ListarUsuario.php");
          }
          else if(isset($_GET["RegistrarUsuario"])){
            $Controlador->DesplegarVista("../Vista/RegistrarUsuario.php");
          }
         else if(isset($_POST["RegistrarUsuario"])){
            $Controlador->RegistrarUsuario();
          }
          else if(isset($_GET["EditarUsuario"])){
            $Controlador->DesplegarVista("../Vista/EditarUsuario.php");    
          }
          else if(isset($_POST["GuardarCambios"])){
            if($Controlador->EditarUsuario()== 1){ // Llamar el método para Insertar
              echo "<script>
              Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Los cambios han sido guardados',
                showConfirmButton: false,
                timer: 1500
              });
              </script>";
            }
            else
            {
              echo "<script>
              Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Se presentaron problemas en la modificación...',
              });
              </script>";
            }
            $Controlador->DesplegarVista("../Vista/ListarUsuario.php"); 
          }
          else if(isset($_GET["EliminarUsuario"])){
            if($Controlador->EliminarUsuario($_GET["IdUsuario"])==1){ // Llamar el método para Modificar
              echo "<script>
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'El registro ha sido eliminado',
              showConfirmButton: false,
              timer: 1500
            });
            </script>";
            }
            else
            {
              echo "<script>
              Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Se presentaron problemas en la eliminación...',
              });
              </script>";
            }
            $Controlador->DesplegarVista("../Vista/ListarUsuario.php"); 
          }
          else if(isset($_GET["GestionarRoles"])){
            $Controlador->DesplegarVista("../Vista/ListarRol.php"); 
          }     
          else if(isset($_GET["EditarRol"])){
            $Controlador->DesplegarVista("../Vista/EditarRol.php");
          }
          else if(isset($_POST["GuardarRol"])){
            $Controlador->ActualizarRol();
          }
          else if(isset($_GET["GestionarPersonalFuerza"])){
            $Controlador->DesplegarVista("../Vista/ListarPersonalFuerza.php"); 
          }   
          /*
            else if(isset($_GET["GestionarUsuarios"])){
                require_once("Usuario/Vista/Index.php");
            }
          */  
          /*
          else if(isset($_GET["EditarUsuario"])){
            require_once("Usuario/Vista/Editar.php");    
          }

         // header("Location:../Vista/Index.php"); 
          require_once("Usuario/Vista/Index.php");  
                 
          }
         
         // header("Location:../Vista/Index.php"); 
          require_once("Usuario/Vista/Index.php");  
                 
          }
            else
          
          */

            {

            
            ?>
          <div class="row">
            
            <div class="col-md-12">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail">
              </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                  <a href="#">
                    <img src="img/logo_<?php echo $_POST["entidad"]; ?>.jpg" alt="" style="width:80%">
                  </a>
                </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
              </div>
            </div>
            <?php
            }
            ?>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <!--
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
-->
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function () {
  $('.btn-danger').on('click',function(e){
    e.preventDefault();
   // if(!data){
     // handleDelete(e, 1);
   Swal.fire({
  title: '¿Está usted seguro?',
  text: "Usted no podrá revertir el cambio",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, borrar éste!'
}).then((result) => {
  if (result.value) {
    window.location = $(this).attr('href');
    $(".btn-danger").trigger('click', {});

    /*Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )*/
  }
});

 // }
  });
    });
/*
    $(document).ready(function () {
  $('.btn-danger').on('click',function(e, data){
    if(!data){
      handleDelete(e, 1);
    }else{
      window.location = $(this).attr('href');
    }
  });
});
function handleDelete(e, stop){
  if(stop){
    e.preventDefault();
    Swal.fire({
      title: "¿Está usted seguro de eliminar el registro?",
      text: "Posteriormente no se podrá reestablecer el regisro.",
      //type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, Eliminar",
        cancelButtonText: "Cancelar",
      //closeOnConfirm: false
    },
    function (isConfirm) {
      if (isConfirm) {
        alert("2222");
        $(".btn-danger").trigger('click', {});
      }
    });
  }
};
*/
  </script>

</body>

</html>

		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>

<script type="text/javascript">
$(document).ready(function() {    
    $('.gn-icon-article').on('click', function(){
        //Añadimos la imagen de carga en el contenedor
        $('#resultadoTransaccion').html('<div class="loading"><img src="img/loader.gif" alt="loading" /><br/>Un momento, por favor...</div>');
 
        $.ajax({
            type: "POST",
            url: "Upload/index.php",
            success: function(data) {
                //Cargamos finalmente el contenido deseado
                $('#resultadoTransaccion').fadeIn(1000).html(data);
            }
        });
        return false;
    });              
});    



$(document).ready(function() {
    $("#buscar").keypress(function() {
        var formData = new FormData();
        formData.append('buscar', $('#buscar').prop('value'));
        $.ajax({
            url: 'Usuario/index.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    $("#resultadoTransaccion").html(response);
                } else {
					alert('Formato de imagen incorrecto.');
				}
            }
        });
		return true;
    });
});


function desplegarpdf(rutadocumento)
{
    //var formData = new FormData();
	$(".card-img-top").attr("src", rutadocumento);
}

$(document).ready(function() {
    $("#btnCrearDirectorio").on('click', function() {
        var formData = new FormData();
        formData.append('nombreCarpeta', $('#nombreCarpeta').prop('value'));
        $.ajax({
            url: 'GestionDirectorios/CrearDirectorio.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    $("#listadoDirectorios").html(response);
                } else {
					alert('Formato de imagen incorrecto.');
				}
            }
        });
		return true;
    });
});

function mostrarVista(ruta)
{
  //let data="pruebas";

	$('#container').html('<div class="loading"><img src="img/loader.gif" alt="loading" /><br/>Un momento, por favor...</div>');
 
        $.ajax({
            type: "POST",
            url: "Usuario/Vista/Index.php",
            success: function(data) {
                //Cargamos finalmente el contenido deseado
                //$('.container').fadeIn(1000).html(data);
                $('.container').html(data);
				        //$('#nombreDirectorioCargar').val(ruta);
            }
        });
  
  //$('.container').html("ssssssssssssssssssssssssssssssssssssss");
  //alert(ruta);
}

function mostrarDirectoriosRutas(ruta)
{
	var formData = new FormData();
    formData.append('nombreCarpetaArchivos', ruta);
	$('#resultadoTransaccion').html('<div class="loading"><img src="img/loader.gif" alt="loading" /><br/>Un momento, por favor...</div>');
 
        $.ajax({
            type: "POST",
            url: "GestionDirectorios/CrearDirectorio.php",
			data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                //Cargamos finalmente el contenido deseado
                $('#resultadoTransaccion').fadeIn(1000).html(data);
				$('#nombreDirectorioCargar').val(ruta);
            }
        });
	
}


$(document).ready(function(){
    $( "#FrmPersona" ).submit(function( event ) { //Cuando se active el evento sumit del formulario
    event.preventDefault(); //Evitar el envío al servidor de la petición
    if($("#TipoDocumento").val().length==0){
        alert("Todos los campos son obligatorios");
    }
    else{
        //document.FrmPersona.submit();//Realizar el submit
        let url = "registrar_persona.php";
        $.ajax({                        
            type: "POST",                 
            url: url,                     
            data: $("#FrmPersona").serialize(), 
            success: function(data)             
            {
              $('#MensajeTransaccion').html(data);               
            }
        });
    }

    });
});

</script>


<script>
            function asignarMenu(idMenu, idRol, idEstado){
                   // $("#buscar").keypress(function() {
                    var formData = new FormData();
                    formData.append('buscar', 1);
                    formData.append('idMenu', idMenu);
                    formData.append('idRol', idRol);
                    formData.append('idEstado', idEstado);
                    $.ajax({
                        url: '../Controlador/Controlador.php',
                        type: 'post',
                        data: formData,
                        //data: 1,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                                          /*if (response != 0) {
                                $("#resultadoTransaccion").html(response);
                            } else {
                                alert('Formato de imagen incorrecto.');
                            }*/
                        }
                    });
                    //return true;
                //});

            }
     </script>



	</body>
</html>