<?php


$logins = array( //usuario => contraseña
    'admin' => 'admin',
    'sergio' => 'sergio',
    'tewc' => 'tewc'
);
$password= $_REQUEST['password'];

function checkLogin($username, $password, $logins){
    if(!isset($username)|| !isset($password)){
        return false;
    }
    return(array_key_exists($username,$logins) && (strcmp($logins[$username], $password) ==0));
}

//Valido
if(!checkLogin($_REQUEST['username'], $_REQUEST['password'], $logins)){
    session_destroy();
    $errorLogin = "El usuario o la contraseña son incorrectos";
    header("Location: ../entrar.php?errorLogin=$errorLogin"); //vuelve a entrar.php p con error

} else {
    session_start(); //comienza sesion
    $_SESSION['username'] = $_REQUEST['username']; //guardo los datos de la sesion
    header("Location: ../inicio.php"); //Redirijo a la pagina de inicio
}