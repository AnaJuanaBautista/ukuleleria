<?php
@ob_start();
session_start();
require_once 'functions.php';


if (isset($_SESSION['user'])) {
    $user    = $_SESSION['user'];
    $loggedin = TRUE;

    $sql = queryMysql("SELECT * FROM productos");

    $f = mysqli_fetch_array($sql);
    $id = $f['idproducto'];
    $ukelele= $f["ukeleles"];
    $extra = $f['extras'];
    $cantidad = $f["cantidad"];
    $descripcion = $f["descripcion"];
    $precio = $f["precio"];
} else $loggedin = FALSE;

//Comprobamos si esta definida la sesión 'tiempo'.
if (isset($_SESSION['tiempo'])) {

    //Tiempo en segundos para dar vida a la sesión.
    $innactive = 1200; //20 min.

    //Calculamos tiempo de vida inactivo.
    $lifeTime = time() - $_SESSION['tiempo'];

    //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
    if ($lifeTime > $innactive) {
        //Removemos sesión.
        session_unset();
        //Destruimos sesión.
        session_destroy();
        //Redirigimos pagina.
        header("Location: login.php");

        exit();
    }
} else {
    //Activamos sesion tiempo.
    $_SESSION['tiempo'] = time();
}

?>

