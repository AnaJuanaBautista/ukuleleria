<?php
session_start();
require_once "data.php";
require "header.php";
require_once 'functions.php'; 
error_reporting(E_ALL ^ E_NOTICE, );


$soprano = $_POST['soprano'];
$concierto = $_POST['concierto'];
$tenor = $_POST['tenor'];
$baritono = $_POST['baritono'];

$tipouke = $_POST['soprano'];
$tipouke2 = $_POST['soprano'];
$tipouke3 = $_POST['concierto'];
$tipouke4 = $_POST['tenor'];
$tipouke5 = $_POST['baritono'];

$extra = $_POST['capotraste'];
$extra2 = $_POST['cuerdas'];

$cantidad1 = $_POST['cantidadS'];
$cantidad2 =  $_POST['cantidadC'];
$cantidad3 =  $_POST['cantidadT'];
$cantidad4 =  $_POST['cantidadB'];
$cantidad5 =  $_POST['cantidadP'];
$cantidad6 =  $_POST['cantidadcuerdas'];

$precioUkeleles1 = $_POST['Precio1'];
$precioUkeleles2 = $_POST['Precio2'];
$precioUkeleles3 = $_POST['Precio3'];
$precioUkeleles4 = $_POST['Precio4'];


$precioExtra = $_POST['Precio5'];
$precioExtra2 = $_POST['Precio6'];

$idcomp  = $_POST['DES']; 
echo '<div class="card text-center">
<div class="card-header">
  confirmacion  de compra de :  ' . $user .'
</div>
<div class="card-body">
  <h5 class="card-title">Confirmacion de compra</h5>';
  $cant = queryMysql("SELECT  cantidad FROM productos WHERE idproducto = '$idcomp'");
  $d = mysqli_fetch_array($cant);
  if ($loggedin)
  {
  
  if($idcomp ==  "1")
  {
    if($cantidad1 == "2")
    {
      $precioUkeleles1 = $precioUkeleles1  + $precioUkeleles1;
    }
    if($cantidad1 == "3")
    {
      $precioUkeleles1 = $precioUkeleles1  + $precioUkeleles1 + $precioUkeleles1;
    }
    if($cantidad1 == "4")
    {
      $precioUkeleles1 = $precioUkeleles1  + $precioUkeleles1 + $precioUkeleles1 + $precioUkeleles1;
    }
    if($cantidad1 == "5")
    {
      $precioUkeleles1 = $precioUkeleles1  + $precioUkeleles1 + $precioUkeleles1 + $precioUkeleles1 + $precioUkeleles1;
    }
    echo '<p class="card-text"> tipo de ukelele:  '. $soprano .'</p>';
    echo '<p class="card-text"> Precio:  '. $precioUkeleles1  .'</p>';
    
    echo '<p class="card-text"> cantidades:  '. $cantidad1  .'</p>';

      $resta  = $d['cantidad'];
        $cantidad1 =  $resta - $cantidad1; 
      echo  '<a href="confirmacion.php"><button type="submit"  class="btn btn-primary">Confirmar Compra!</button></a>
      </div>
      <div class="card-footer text-muted">
      </div>
      </div>'; 
  
      if (!empty ($idcomp)) {
        //$id = $_GET['DES'];  
        queryMysql("UPDATE productos
        SET  cantidad  = ' $cantidad1' 
        WHERE idproducto = '$idcomp' ");
            
  
  }
  }

 elseif($idcomp ==  "2")
  {
    if($cantidad2 == "2")
    {
      $precioUkeleles2 = $precioUkeleles2  + $precioUkeleles2;
    }
    if($cantidad2 == "3")
    {
      $precioUkeleles2 = $precioUkeleles2  + $precioUkeleles2 + $precioUkeleles2;
    }
    if($cantidad2 == "4")
    {
      $precioUkeleles2 = $precioUkeleles2  + $precioUkeleles2 + $precioUkeleles2 + $precioUkeleles2;
    }
    if($cantidad2 == "5")
    {
      $precioUkeleles2 = $precioUkeleles2  + $precioUkeleles2 + $precioUkeleles2 + $precioUkeleles2 + $precioUkeleles2;
    }
    echo '<p class="card-text"> tipo de ukelele:  '. $concierto .'</p>';
    echo '<p class="card-text"> Precio:  '. $precioUkeleles2 .'</p>';
    
    echo '<p class="card-text"> cantidades:  '. $cantidad2  .'</p>';

      $resta2 = $d['cantidad'];
        $cantidad2 =  $resta2 - $cantidad2; 
      echo  '<a href="confirmacion.php"><button type="submit"  class="btn btn-primary">Confirmar Compra!</button></a>
      </div>
      <div class="card-footer text-muted">
       
      </div>
      </div>'; 
  
      if (!empty ($idcomp)) {
        //$id = $_GET['DES'];  
        queryMysql("UPDATE productos
        SET  cantidad  = ' $cantidad2' 
        WHERE idproducto = '$idcomp' ");
            
  
  }
  }
  elseif($idcomp ==  "3")
  {
    if($cantidad3 == "2")
    {
      $precioUkeleles3 = $precioUkeleles3  + $precioUkeleles3;
    }
    if($cantidad3 == "3")
    {
      $precioUkeleles3 = $precioUkeleles3  + $precioUkeleles3 + $precioUkeleles3;
    }
    if($cantidad3 == "4")
    {
      $precioUkeleles3 = $precioUkeleles3  + $precioUkeleles3 + $precioUkeleles3 + $precioUkeleles3;
    }
    if($cantidad3 == "5")
    {
      $precioUkeleles3 = $precioUkeleles3  + $precioUkeleles3 + $precioUkeleles3 + $precioUkeleles3 + $precioUkeleles3;
    }
    echo '<p class="card-text"> tipo de ukelele:  '. $tenor .'</p>';
    echo '<p class="card-text"> Precio:  '. $precioUkeleles3 .'</p>';
   
    echo '<p class="card-text"> cantidades:  '. $cantidad3 .'</p>';

 
      $resta3 = $d['cantidad'];
        $cantidad3 =  $resta3 - $cantidad3; 
      echo  '<a href="confirmacion.php"><button type="submit"  class="btn btn-primary">Confirmar Compra!</button></a>
      </div>
      <div class="card-footer text-muted">
       
      </div>
      </div>'; 
  
      if (!empty ($idcomp)) {
        //$id = $_GET['DES'];  
        queryMysql("UPDATE productos
        SET  cantidad  = ' $cantidad3' 
        WHERE idproducto = '$idcomp' ");
            
  
  }
  }


  elseif($idcomp ==  "4")
  {
    if($cantidad4 == "2")
    {
      $precioUkeleles4 = $precioUkeleles4  + $precioUkeleles4;
    }
    if($cantidad4 == "3")
    {
      $precioUkeleles4 = $precioUkeleles4  + $precioUkeleles4 + $precioUkeleles4;
    }
    if($cantidad4 == "4")
    {
      $precioUkeleles4 = $precioUkeleles4  + $precioUkeleles4 + $precioUkeleles4 + $precioUkeleles4;
    }
    if($cantidad4 == "5")
    {
      $precioUkeleles4 = $precioUkeleles4  + $precioUkeleles4 + $precioUkeleles4 + $precioUkeleles4 + $precioUkeleles4;
    }
    echo '<p class="card-text"> tipo de ukelele:  '.  $baritono  .'</p>';
    echo '<p class="card-text"> Precio:  '. $precioUkeleles4 .'</p>';
   
    echo '<p class="card-text"> cantidades:  '. $cantidad4 .'</p>';


      $resta4 = $d['cantidad'];
        $cantidad4 =  $resta4 - $cantidad4; 
      echo  '<a href="confirmacion.php"><button type="submit"  class="btn btn-primary">Confirmar Compra!</button></a>
      </div>
      <div class="card-footer text-muted">
       
      </div>
      </div>'; 
  
      if (!empty ($idcomp)) {
        //$id = $_GET['DES'];  
        queryMysql("UPDATE productos
        SET  cantidad  = ' $cantidad4' 
        WHERE idproducto = '$idcomp' ");
            
  
  }
  }


  elseif($idcomp ==  "5")
  { 
    if($cantidad5 == "2")
    {
      $precioExtra = $precioExtra  + $precioExtra;
    }
    if($cantidad5 == "3")
    {
      $precioExtra = $precioExtra  + $precioExtra + $precioExtra;
    }
    if($cantidad5 == "4")
    {
      $precioExtra = $precioExtra  + $precioExtra + $precioExtra + $precioExtra;
    }
    if($cantidad5 == "5")
    {
      $precioExtra = $precioExtra  + $precioExtra + $precioExtra + $precioExtra + $precioExtra;
    }
    echo '<p class="card-text"> producto  '.  $extra  .'</p>';
    echo '<p class="card-text"> Precio:  '. $precioExtra .'</p>';
   
    echo '<p class="card-text"> cantidades:  '.$cantidad5  .'</p>';


      $resta5 = $d['cantidad'];
        $cantidad5 =  $resta5 - $cantidad5; 
      echo  '<a href="confirmacion.php"><button type="submit"  class="btn btn-primary">Confirmar Compra!</button></a>
      </div>
      <div class="card-footer text-muted">
       
      </div>
      </div>'; 
  
      if (!empty ($idcomp)) {
        //$id = $_GET['DES'];  
        queryMysql("UPDATE productos
        SET  cantidad  = ' $cantidad5' 
        WHERE idproducto = '$idcomp' ");
            
  
  }
  }


  elseif($idcomp ==  "6")
  {
    if($cantidad6 == "2")
    {
      $precioExtra2 = $precioExtra2  + $precioExtra2;
    }
    if($cantidad6 == "3")
    {
      $precioExtra2 = $precioExtra2  + $precioExtra2 + $precioExtra2;
    }
    if($cantidad6 == "4")
    {
      $precioExtra2 = $precioExtra2  + $precioExtra2 + $precioExtra2 + $precioExtra2;
    }
    if($cantidad6 == "5")
    {
      $precioExtra2 = $precioExtra2  + $precioExtra2 + $precioExtra2 + $precioExtra2 + $precioExtra2;
    }
    echo '<p class="card-text"> Producto  '. $extra2 .'</p>';
    echo '<p class="card-text"> Precio:  '. $precioExtra2 .'</p>';
    
    echo '<p class="card-text"> cantidades:  '. $cantidad6 .'</p>';
    

    $resta6 = $d['cantidad'];
      $cantidad6 =  $resta6 - $cantidad6; 
    echo  '<a href="confirmacion.php"><button type="submit"  class="btn btn-primary">Confirmar Compra!</button></a>
    </div>
    <div class="card-footer text-muted">
     
    </div>
    </div>'; 

    if (!empty ($idcomp)) {
      //$id = $_GET['DES'];  
      queryMysql("UPDATE productos
      SET  cantidad  = ' $cantidad6' 
      WHERE idproducto = '$idcomp' ");
          

}
         
          
  }
}

?>