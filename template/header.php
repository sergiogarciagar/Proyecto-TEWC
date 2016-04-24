<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="./index.php">
                <img src="./img/Logoazul.png" alt="Lattes theme logo"
                     style="width: 170px; height: 60px; margin-top: -3px;">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li id="inicio">
                    <a class="page-scroll" href="inicio.php">Inicio</a>
                </li>
                <li id="galeria">
                    <a class="page-scroll" href="galeria.php">Galeria</a>
                </li>
                <li id="sube">
                    <a class="page-scroll" href="sube.php">Sube tu foto</a>
                </li>
                <?php
                session_start();
                if($_SESSION['username'] == null) {
                    echo "<li id='registra'>";
                    echo "<a href='./endesarrollo.php'><span class='glyphicon glyphicon-user'>";
                    echo "</span> Registrate</a>";
                    echo "</li>";
                    echo "<li id='entra'><a href='../entrar.php'>";
                    echo "<span class='glyphicon glyphicon-log-in'></span> Entra</a>";
                    echo "</li>";
                }
                else {
                    echo "<li id='perfil'>";
                    echo "<a href='./endesarrollo.php'><span class='glyphicon glyphicon-user'>";
                    echo "</span>". " " . $_SESSION['username'] ."</a>";
                    echo "</li>";
                    echo "<li id='salir'><a href='../php/logout.php'>";
                    echo "<span class='glyphicon glyphicon-log-in'></span> Salir</a>";
                    echo "</li>";
                }
                    ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mas
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="enlaces"><a href="./endesarrollo.php">Enlaces de interes</a></li>
                        <li id="contacta"><a href="./contacta.php">Contacta</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
