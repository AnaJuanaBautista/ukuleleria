<?php 
  session_start(); 
  echo <<<_INIT
<!DOCTYPE html> 
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>                 
    <script src='../node_modules/jquery/dist/jquery.min.js'></script>
    <script src='../node_modules/jquery-mobile/js/jquery.mobile.js'></script>
    <script type="text/javascript" src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">        
    <link rel='stylesheet' href='styles.css' type='text/css'>    
    <script src='javascript.js'></script>
_INIT;
  require_once 'functions.php'; 
  $userstr = "Bienvenido querido usuario "; 
  if (isset($_SESSION['user'])) { 
	$user     = $_SESSION['user']; 
	$loggedin = TRUE;              
	$userstr  = "Conectado como: $user";
  }
  else $loggedin = FALSE; 

 echo <<<_MAIN
     <title> UKULELES: $userstr </title>
   </head>
   <body class="ejemplo">
     <div data-role='page' class="ejemplo">
     
        <div data-role='header'>
        <br><br><br>
         <div id='logo' class='center'>UKULELERIA</div>
          <center><img src='ukulele.png'
           width="700" height="300" class="content">
          </center>
          <br><br>
         <div class='username'>$userstr</div>
        </div>
        <div data-role='content'>
_MAIN;
  if($loggedin) {
echo <<<_LOGGEDIN
<div class="fixed-top">
<nav class="navbar navbar navbar-light" style="background-color: #e9f6ff;">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
    <a class="nav-link active" href="members.php?view=$userstr">Home <span class="sr-only">(current)</span></a>
    <a class="nav-link" href="members.php" data-transition="slide">Miembros</a>
    <a class="nav-link" href="friends.php" data-transition="slide">Amigos</a>
    <a class="nav-link" href="messages.php" data-transition="slide">Mensajes</a>
    <a class="nav-link" href="profile.php" data-transition="slide">Editar perfil</a>
    <a class="nav-link" href="logout.php" data-transition="slide">Cerrar sesion</a>
    <a class="nav-link" href="tiposdeukuleles.php" data-transition="slide">Tipos de Ukeleles</a>
    <a class="nav-link" href="musica.php" data-transition="slide">Musica</a>
    <a class="nav-link" href="sitiosdeventas.php" data-transition="slide">Venta</a>
    <a class="nav-link" href="Comentario.php" data-transition="slide">Comentarios</a>
  </div>
</div>

</div>
</nav>
    
_LOGGEDIN;
  }
  else { 
echo <<<_GUEST
        <div class="center" class="content-light-blue">
          <a data-role='button' data-inline='true' data-icon='home'
            data-transition="slide" href='index.php'>Inicio</a>
          <a data-role='button' data-inline='true' data-icon='plus'
            data-transition="slide" href='signup.php'>Regístrate</a>
          <a data-role='button' data-inline='true' data-icon='check'
            data-transition="slide" href='login.php'>Iniciar sesión</a>
        </div>
        <p class='info'>(Debe iniciar sesión para usar esta aplicación)</p>
_GUEST;
  }

?>