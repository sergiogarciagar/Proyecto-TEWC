
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Contacta con la artista</h2>
                    <p>¡Si tienes alguna duda o pregunta contacta!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Localización</h3>
                <p>40150 Segovia, Villacastin</p>
                <p><i class="fa fa-envelope"></i> sandragarcig@gmail.com</p>
            </div>
            <div class="col-md-6">
                <form name="sentMessage" id="contactForm" novalidate="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tu nombre *" id="name" required="" data-validation-required-message="Por favor indica tu nombre.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Tu email *" id="email" required="" data-validation-required-message="Por favor indica tu email.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Tu mensaje *" id="message" required="" data-validation-required-message="Por favor indica tu mensaje."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn">Envia tu mensaje</button>
                        </div>
                    </div>
                </form>
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


<?php include "template/scripts.php"; ?>
</body>
</html>










