<?php
    session_start();
    session_unset();
    $_SESSION['username'] = null;
    unset($_SESSION['username']);
    session_destroy();
    header("Location: ../inicio.php"); //vuelve a inicio

?>