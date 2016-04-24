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

<!--  Comienzo sube  -->
<section >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="skills-text">
                    <h2 class="text-center" style="margin-top: 40px;">Sube tu mejor foto</h2>
                    <p class="text-center" style="margin-top: 40px;">
                        Ayudanos sube una de tus mejores fotos,paisajes, monumentos,..<br>
                        y ayuda a la artista a mejorar su creatividad
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="./img/subefondo.jpg" class="center-block fotoartista">
            </div>
        </div>
    </div>
</section>
<!--  Fin  comienzo sube -->

<section id="sub" class="light-bg">
    <div class="container">
        <p class="row">
            <div class="col-lg-12 text-center">
                <p class="section-title" class="text-center">
                    <h2>Sube tu foto</h2>
                    <p class="text-center">Aquí podrá encontrar información sobre como subir su foto.
                        <span class="glyphicon glyphicon-hand-down" style="margin-left: 3px;"></span></p>
                    <form data-toggle="validator" action="sube_fichero.php" method="post" id="subeform" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group " >
                            <legend>Introduce los siguientes campos</legend>
                        </div>
                        <fieldset>
                        <div class="from-group">
                            <label for="foto" class="text-center">Adjuntar un archivo</label>
                            <input type="file" id="foto" name="foto" class="center-block"
                                   data-error="Cuidado foto no valida :(">
                            <p class="help-block">Sube tu mejor foto.(Tamaño menor que 1MB)</p>
                            <div class="help-block with-errors"></div>
                        </div>
                            <div class="form-group has-feedback">
                            <label for="autornew" class="control-label">Autor</label>
                            <input type="text" pattern="^[_A-z]{1,}$" id="autornew" name="autornew" size="25"
                                   placeholder="Introduce tu nombre" required
                                   data-error ="Nombre no valido">
                            <div class="help-block with-errors"></div>
                        </div>
                            <div class="form-group has-feedback">
                                <label for="autoremail" class="control-label">Email</label>
                                <input type="email"  id="autoremail"
                                       name="autoremail" size="37" placeholder="Introduce tu dirección de correo electrónico"
                                         required data-error ="Email incorrecto, introduzca un correo valido">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group has-feedback">
                            <label for="lugarnew" class="control-label">Lugar</label>
                            <input type="text" pattern="^[_A-z]{1,}$" id="lugarnew" name="lugarnew"  size="25"
                                   placeholder="Introduce el lugar"
                                   data-error="Lugar no valido">
                            <div class="help-block with-errors"></div>
                        </div>

                            <div class="form-group has-feedback">
                            <label for="titulonew" class="control-label">Titulo</label>
                            <input type="text" pattern="^[_A-z0-9]{1,}$" id="titulonew" name="titulonew"  size="25"
                                   placeholder="Introduce un titulo" required
                                   data-error="Titulo asignado incorrecto">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="from-group">
                            <label for="desnew" class="control-label">Descripción</label><br>
                            <textarea name="desnew" id="desnew" cols="40" rows="3"></textarea>
                        </div>
                            <button type="submit" class="btn btn-primary">Sube tu foto</button>

                        </fieldset>
                        <p style="margin-top: 35px;">¡MUCHAS GRACIAS!</p>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
</div>
        </div>
    </section>

<section >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="skills-text">
                    <h2 class="text-center">Ultimas fotos:</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding: 70px; margin-top: -50px;">
                <!-- Indicators -->
                <ol class="carousel-indicators">

                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">

                    <div class="col-lg-6 col-md-12">
                        <div class="skills-text">
                        <h2 class="text-center">Descripción</h2>
                        <h4>Titulo</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Delectus deserunt earum eos eveniet molestias nulla officiis repellat,
                            sunt tempora ut. Commodi corporis dicta doloremque est ex excepturi odit ratione unde ut vero.
                            Amet inventore ratione unde? Amet, consequatur dolor dolores eaque excepturi facere,
                            hic inventore libero non nulla provident quo ratione.
                            Doloribus nihil quasi reprehenderit similique velit.
                            Dignissimos distinctio facilis ipsa iure labore maxime optio tenetur voluptates!
                            Aperiam eligendi iste labore laborum modi non quis repellendus tenetur?
                            Libero, perspiciatis, provident?</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img src="./img/paisajereal2.jpg" class="center-block fotopaisaje img-responsive">
                        <p class="text-center" style="margin-top: 10px;">Autor</p>
                    </div>
                </div>
                        <div class="item">
                            <div class="col-lg-6 col-md-12">
                                <div class="skills-text">
                                    <h2 class="text-center">Descripción</h2>
                                    <h4>Titulo</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus deserunt earum eos eveniet molestias nulla officiis repellat,
                                        sunt tempora ut. Commodi corporis dicta doloremque est ex excepturi odit ratione unde ut vero.
                                        Amet inventore ratione unde? Amet, consequatur dolor dolores eaque excepturi facere,
                                        hic inventore libero non nulla provident quo ratione.
                                        Doloribus nihil quasi reprehenderit similique velit.
                                        Dignissimos distinctio facilis ipsa iure labore maxime optio tenetur voluptates!
                                        Aperiam eligendi iste labore laborum modi non quis repellendus tenetur?
                                        Libero, perspiciatis, provident?
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <img src="./img/paisajereal.jpg" class="center-block fotopaisaje img-responsive">
                                <p class="text-center" style="margin-top: 10px;">Autor</p>
                            </div>
                        </div>
            </div>
    </div>
            </div>
        </div>
</section>

<!-- Footer -->
<footer>
    <?php include "template/footer.php"; ?>
</footer>
<!-- End Footer -->
<!-- End Body -->

<!-- Modal -->
<!--
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
<!--
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tu foto ha sido subida con exito</h4>
            </div>
            <div class="modal-body">
                <h2 class="text-center">Tu foto</h2>
                <img src="./img/fotosubida.jpg" class="img-responsive center-block" alt="author" style="weight:400px; height: 350px;">
                <h4 class="text-center">¡MUCHAS GRACIAS POR AYUDARNOS!</h4>
                <p class="text-center">Podras ver tu foto en breve momentos en galeria de fotos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" type="submit" onclick = "location='./galeriafotos.php'">
                    Ir a galeria de fotos</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>


    </div>
</div>

-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/validator.js"></script>
<?php include "template/scripts.php"; ?>
</body>
</html>
