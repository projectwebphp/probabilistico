<?php
//Directorio

$dir = getcwd();
if(isset($_POST["nombreCarpeta"]))
{
    $micarpeta = str_replace("GestionDirectorios","Repositorio",$dir)."/".$_POST["nombreCarpeta"];
    $dir = str_replace("GestionDirectorios","Repositorio",$dir);
    if (!file_exists($micarpeta)) {
        mkdir($micarpeta, 0777, true);
    }
}
elseif(isset($_POST["nombreCarpetaArchivos"]))
{
    $micarpeta = str_replace("GestionDirectorios","Repositorio",$dir)."/".$_POST["nombreCarpetaArchivos"];
    $dir = str_replace("GestionDirectorios","Repositorio",$dir)."/".$_POST["nombreCarpetaArchivos"];
    if (!file_exists($micarpeta)) {
        mkdir($micarpeta, 0777, true);
    }
}
else
{
    $dir = $dir."/Repositorio";
}


//echo $dir;
//echo "<br>";
//echo $_POST["nombreCarpetaArchivos"];
$directorio = opendir($dir);

$archivos = array();
$carpetas = array();

//Carpetas y Archivos a excluir
$excluir = array('.', '..', 'index.php', 'favicon.ico','folder.png','file.png','.dropbox.cache','.dropbox');

while ($f = readdir($directorio)) {
    if (is_dir("$dir/$f") && !in_array($f, $excluir)) {
        $carpetas[] = $f;
    } else if (!in_array($f, $excluir)){
        //No es una carpeta, por ende lo mandamos a archivos
        $archivos[] = $f;
    }
}
closedir($directorio);

sort($carpetas,SORT_NATURAL | SORT_FLAG_CASE);
sort($archivos,SORT_NATURAL | SORT_FLAG_CASE);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Localhost</title>

        <style>
            body {
                margin: 0;
                font-family: Helvetica, Arial, sans-serif;
                font-size: 14px;
                line-height: 20px;
                color: #333333;
                background-color: #ffffff;
                display: block;
                overflow-y:scroll;
            }

            .fondo{
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-left: -12px;
                padding: 5px;
                /*background:red;*/
                overflow-y: visible;
               
            }

            .container {
                margin-right: auto;
                margin-left: auto;
                /*width: 940px;*/
                display: block;
            }

            .footer {
                margin-right: auto;
                margin-left: auto;
                width: 940px;
                display: block;
                text-align: right;
                font-size: 9px;
                margin-top: 10px;
            }

            h1 {
                font-size: 38px;
                margin: 30px 0 10px 0;
                font-weight: bold;
                line-height: 20px;
            }

            .row {
                margin-left: -20px;
                display: inline-block;;
            }

            .col {
                width: 300px;
                float: left;
                min-height: 1px;
                margin-left: 20px;
                display: block;
            }

            p {
                margin: 0 0 10px 0;
            }

            .carpeta{
                background: url(/Dropbox/folder.png) no-repeat 0;
                padding-left: 20px;
            }

            .archivo{
                background: url(/Dropbox/file.png) no-repeat 0;
                padding-left: 20px;
            }

            a {
                color: #336699;
                text-decoration: none;
                font-weight: bolder;
            }
		a:hover {
                color: #7094B8;
                text-decoration: none;
                font-weight: bolder;
            }
        </style>
    </head>
    <body>
    <?php
    if(!isset($_POST["nombreCarpetaArchivos"])){
    ?>
        <div class="container" >
            <h5>Directorios</h5>
            <div class="fondo" style="overflow-y: scroll; height:400px;>
                <div class="row" >
                    <div class="col" >
                        <table border="0" cellspacing="1">
                        <?php
                        //Mostrar Carpetas
                        $i = 1;
                        foreach ($carpetas as $c) {
                            echo "<tr>";
                            $carpeta="'".$c."'";
                            /*
                            echo '<td><p class="carpeta" onclick="mostrarRuta('.$carpeta.')" >'.
                            '<img src="img/iconos/folder.png"></img>'
                            . $c . '</p></td>';
                            */
                            echo "<td><img src='img/iconos/folder.png'></img>$c</td>";
                            echo '<td onclick="mostrarDirectoriosRutas('.$carpeta.')">|<img src="img/iconos/listar.png" title="Listar Archivos"></img></td>';
                            echo '<td onclick="mostrarRuta('.$carpeta.')">|<img src="img/iconos/cargar.png" title="Cargar Archivos"></img></td>';
                            echo "</tr>";
                            //echo '<p class="carpeta"><a href="' . $c . '">' . $c . '</a></p>';
                            /*
                            if (($i % 6) == 0 && ($i % 18) != 0) {
                                echo '</div><div class="col">';
                            }
                            if (($i % 18) == 0) {
                                echo '</div></div><div class="row"><div class="col">';
                            }
                            */
                            $i++;
                        }
                        ?>
                        </table>
                    </div>
                </div>
            </div>
    <?php
    }
    ?>
    <?php 
    if(isset($_POST["nombreCarpetaArchivos"]))
    {
    ?>
    
        <h5>Archivos</h5>
        <div class="fondo" style="margin-left:5%">
            <table border="1" align="center">
                <tr>
                    <td>
                        <div class="row">
                            <div class="col">
                                <?php
                                //Mostrar Archivos
                                $i = 1;
                                $archivo="Repositorio/".$_POST["nombreCarpetaArchivos"]."/";

                                foreach ($archivos as $a) {
                                    //    echo '<p class="archivo" onclick="desplegarpdf(' . $a . ')"><a href="' . $a . '">' . $a . '</a></p>';
                                    $archivo = "'"."Repositorio/".$_POST["nombreCarpetaArchivos"]."/".$a."'";
                                    echo '<p class="archivo" onclick="desplegarpdf(' . $archivo . ')"><a href="#">' . $a . '</a></p>';
                                    if (($i % 6) == 0 && ($i % 18) != 0) {
                                        echo '</div><div class="col">';
                                    }
                                    if (($i % 18) == 0) {
                                        echo '</div></div><div class="row"><div class="col">';
                                    }
                                    $i++;
                                }
                                ?>
                            </div>
                        </div>                       
                    </td>
                    <td>
                        <div class="card" style="width: 18rem;">
                            <!--<img class="llllcard-img-top" src="archivos/default-avatar.png">-->
                            <iframe class="card-img-top" src="" width="100%" height="300"></iframe>
                            <!--<div class="card-body">
                                <h5 class="card-title">Sube un archivo pdf</h5>
                                <p class="card-text"></p>
                                <div class="form-group">
                                    <label for="image">Nueva imagen</label>
                                    <input type="file" class="form-control-file" name="archivo" id="archivo">
                                </div>
                                <input type="button" class="btn btn-primary upload" value="Subir">
                            </div>
                            -->
                        </div>
                    </td>
                </tr>
            </table>

            <?php 
            if(1==2)
            {
            ?>
            <div class="row">
                <div class="col">
                    <?php
                    //Mostrar Archivos
                    $i = 1;
                    foreach ($archivos as $a) {
                        echo '<p class="archivo"><a href="' . $a . '">' . $a . '</a></p>';
                        if (($i % 6) == 0 && ($i % 18) != 0) {
                            echo '</div><div class="col">';
                        }
                        if (($i % 18) == 0) {
                            echo '</div></div><div class="row"><div class="col">';
                        }
                        $i++;
                    }
                    ?>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    <?php
    }
    ?>
    </div>
    </body>
</html>