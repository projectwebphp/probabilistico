<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Subida de imágenes con jQuery y Ajax Demo</title>
<meta name="description" content="Subida de imágenes con jQuery y Ajax.."/>
<meta name="author" content="Jose Aguilar">
<link rel="shortcut icon" href="https://www.jose-aguilar.com/blog/wp-content/themes/jaconsulting/favicon.ico" />
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $(".upload").on('click', function() {
        var formData = new FormData();
        var files = $('#archivo')[0].files[0];
        formData.append('file',files);
        formData.append('nombreDirectorioCargar', $('#nombreDirectorioCargar').prop('value'));
        formData.append('PalabrasClaveDocumento', $('#PalabrasClaveDocumento').prop('value'));
        $.ajax({
            url: 'Upload/upload.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    //$(".card-img-top").attr("src", "Upload/archivos/Evidencias_25_06_2020_1907436_1907443.pdf");
                    $(".card-img-top").attr("src", response);
                } else {
					alert('Formato de imagen incorrecto.');
				}
            }
        });
		return false;
    });
});


</script>
</head>

<body>
<div class="container">
    <h5>Carga de Archivos Pdf</h5>
    <h2 class="lead"></h2>
    
    <div class="row">
        <div id="content" class="col-lg-12">
			<form method="post" action="#" enctype="multipart/form-data">
                <table border="1" align="center">
                    <tr>
                        <td>
                            Los archivos se cargarán en:<input type="text" readonly name="nombreDirectorioCargar" id="nombreDirectorioCargar" />
                            <br/>
                            Palabras Clave:<textarea rows="5" cols="50" id="PalabrasClaveDocumento" name="PalabrasClaveDocumento"></textarea>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <!--<img class="llllcard-img-top" src="archivos/default-avatar.png">-->
                                <iframe class="card-img-top" src="" width="100%" height="300"></iframe>
                                <div class="card-body">
                                    <h5 class="card-title">Sube un archivo pdf</h5>
                                    <p class="card-text"></p>
                                    <div class="form-group">
                                        <label for="image">Nueva imagen</label>
                                        <input type="file" class="form-control-file" name="archivo" id="archivo">
                                    </div>
                                    <input type="button" class="btn btn-primary upload" value="Subir">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>  
</div>

</body>
</html>
