<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "template/head.php"; ?>
</head>
<!-- Body -->
<body id="page-top">
<!-- Navigation -->
<?php include "template/header.php"; ?>

<section id="contact">
    <div class="container" style="margin-top: 60px;">
        <form class="form-signin" action="php/procesaLogin.php" method="post">
            <h2 class="form-signin-heading text-center">Entrar</h2>
            <div class="row">
            <div class="col-lg-4  col-xs-2 center-block"></div>
            <div class="col-lg-4 col-xs-8 center-block">
            <label for="username" class="sr-only">Usuario</label>
            <input type="text" id="username" name="username" class="form-control"
                   placeholder="Nombre de usuario" required autofocus>
            </div>
            <div class="col-lg-4 col-xs-2 center-block"></div>
                </div>
            <div class="row">
            <div class="col-lg-4 col-xs-2 center-block"></div>
            <div class="col-lg-4 col-xs-8 center-block">
            <label for="password" class="sr-only">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control"
                   placeholder="Contraseña" required style="margin-top: 2px;">
            </div>
            <div class="col-lg-4 col-xs-2 center-block"></div>
            </div>
            <div class="row">
            <div class="col-lg-4 col-xs-2 center-block"></div>
            <div class="col-lg-4 col-xs-8 center-block">
            <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 10px;">Entrar</button>
                </div>
            <div class="col-lg-4 col-xs-2 center-block"></div>
                    </div>
            <?php if (isset($_REQUEST['errorLogin'])): ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        Error
                    </div>
                    <div class="panel-body">
                        <p><?php echo "Nombre o contraseña incorrectas";?></p>
                    </div>
                </div>
            <?php endif;?>
        </form>
        <div style="padding: 80px;"></div>
    </div>
</section>



<!-- Footer -->
<footer>
    <?php include "template/footer.php"; ?>
</footer>
<!-- End Footer -->
<!-- End Body -->


<?php include "template/scripts.php"; ?>
</body>
</html>

