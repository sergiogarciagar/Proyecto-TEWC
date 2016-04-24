<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "template/head.php"; ?>
</head>
<!-- Body -->
<body id="page-top">
<!-- Navigation -->
<?php include "template/header.php"; ?>
<!-- Header -->

<?php


echo "<div class='center-block' style='margin-top: 80px;'>";
echo "<h1 class='text-center'>Datos enviados</h1>";
if($_POST['autornew'])
$nombre= $_POST['autornew'];
else
    $nombre = "No ha introducido este valor";
if($_POST['autoremail'])
$email = $_POST['autoremail'];
else
    $email= "No ha introducido este valor";
if($_POST['lugarnew'])
$lugar = $_POST['lugarnew'];
else
    $lugar = "No ha introducido este valor";
if ($_POST['titulonew'])
$titulo = $_POST['titulonew'];
else
    $titulo = "No ha introducido este valor";
if($_POST['desnew'])
$des = $_POST['desnew'];
else
    $des = "No ha introducido este valor";
echo "<p class='text-center'>El nombre del autor de la foto es: <strong>$nombre</strong></p>";
echo "<p class='text-center'>El correo del autor es: <strong>$email</strong></p>";
echo "<p class='text-center'>El lugar donde se ha realizado la foto es: <strong>$lugar</strong></p>";
echo "<p class='text-center'>El titulo que ha dado a la foto es: <strong>$titulo</strong></p>";
echo "<p class='text-center'>La descripción de la foto es: <strong>$des</strong></p>";
echo "</div>"

?>
<?php
ini_set('display_errors','On');
error_reporting(E_ALL ^ E_NOTICE);

function is_valido($fichero){
    $extValidas = array("gif","jpeg","jpg","png");
    $temp = explode(".",$_FILES[$fichero]['name']);
    $extension = end($temp);
    $tipo = $_FILES[$fichero]["type"];
    $tiposValidos = array("image/jpeg","image,jpg","image,pjpeg","image/x-png","image/png");
    $maxTamano = 1000000;

    echo "<p class='text-center'><strong> Extensión válida ". in_array($extension, $extValidas) . "</strong> </p>";
    echo "<p class='text-center'><strong> Tipo válido " . in_array($tipo, $tiposValidos) . "</strong> </p>";
   // echo "<p class='text-center'>Tamaño " . $_FILES[$fichero]["size"] . "</p>";
    echo "<p class='text-center'><strong> Tamaño permitido " . ($_FILES[$fichero]['size']<$maxTamano)."</strong> </p>";
    return(in_array($extension,$extValidas) && in_array($tipo,$tiposValidos) && ($_FILES[$fichero]['size']<$maxTamano));
}
function muestraFichero($fichero){
    echo"<p class='text-center'><strong> Subido: " . $_FILES[$fichero]['name'] . "</strong> </p>";
    echo "<p class='text-center'><strong> Tipo: " . $_FILES[$fichero]['type'] . "</p></strong> ";
    echo "<p class='text-center'><strong> Tamaño : " . $_FILES[$fichero]['size'] . "</strong> </p>";
}

function mueveFichero($origen,$destino) {
    move_uploaded_file($origen,$destino);

}

function existe_directorio($destino) {
    return file_exists($destino) && is_dir($destino);
}

echo "<div class='center-block'>";
echo "<h1 class='text-center'>Resultado de subir fichero</h1>";

$f= 'foto';
$d = "./subidas/";

if(!is_valido($f)) {
    echo"<h3 class='text-center'><strong>Fichero inválido</strong></h3>";
} elseif ($_FILES[$f]["error"] > 0) {
    echo "<p class='text-center'><strong>Error: " - $_FILES[$f]['error'] . "</strong></p>";
} else  {
    muestraFichero($f);
    $fichero_movido = $d . $_FILES[$f]['name'];
    if(!existe_directorio($d)){
        echo "<p class='text-center'><strong> Error: no existe el directorio de destino $d</strong> </p>";
        //mkdir $d;  //Para crear el directorio
        //echo "<p> Directorio creado $d</p>";
    } elseif(file_exists($fichero_movido)){
        echo "<p class='text-center'>" . "<strong>Disculpe el nombre de la foto ya existe</strong></p>";
    } else{
        mueveFichero($_FILES[$f]['tmp_name'], $fichero_movido);
        echo "<div class='light-bg'>";
        echo "<img src= $fichero_movido class='img-responsive center-block' alt='author' style='weight:200px; height: 150px;'>";
        echo "</div></div>";

    }
}

echo "<div class='text-center' style='margin-top: 20px;'>" . "<button type='button' class='btn btn-default' data-dismiss='modal'
 onclick = location='sube.php'>Volver a Subir Foto</button>"

?>


<!-- Footer -->
<footer>
    <?php include "template/footer.php"; ?>
</footer>
<!-- End Footer -->
<!-- End Body -->

<?php include "template/scripts.php"; ?>
</body>
</html>
