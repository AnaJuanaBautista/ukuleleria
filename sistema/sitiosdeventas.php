<?php 
session_start();
  require_once "data.php";
   require_once 'header.php'; 
   echo
'<div class="card-deck">
<div class="card">
  <img src="soprano.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ukulele soprano</h5>
    <p class="card-text">$1500</p>
    
    <form method="POST" action="carrito.php">
        <input type="hidden" name="soprano" value="Soprano" />
        <input type="hidden" name="DES" value="1" />
        <input type="hidden" name="Precio1" value="1500" />
       <button type="submit" value="1">Agregar al carrito</a></button>
       <div class="col-md-6 mb-6">
       <label for="exampleFormControlSelect1" class="text"> Eliga la cantidad</label>
       <select name="cantidadS" required>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
       </select>
       
        </form></div>';

echo '</div>
</div>
<br>
<div class="card">
  <img src="concierto.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ukulele concierto</h5>
    <p class="card-text">$2000</p>
    
     <form method="POST" action="carrito.php">
        <input type="hidden" name="concierto" value="concierto" />
        <input type="hidden" name="DES" value="2" />
        <input type="hidden" name="Precio2" value="2000" />
       <button type="submit" value="2">Agregar al carrito</a></button>
       <div class="col-md-6 mb-6">
       <label for="exampleFormControlSelect1" class="text"> Eliga la cantidad</label>
       <select name="cantidadC" required>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
       </select>
       </div>
        </form>';    
    echo '</div>
</div>
<br>
<div class="card">
  <img src="tenor.png"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ukulele tenor</h5>
    <p class="card-text">$3000</p>
    
    <form method="POST" action="carrito.php">
        <input type="hidden" name="tenor" value="tenor" />
        <input type="hidden" name="DES" value="3" />
        <input type="hidden" name="Precio3" value="3000" />
       <button type="submit" value="3">Agregar al carrito</a></button>
       <div class="col-md-6 mb-6">
       <label for="exampleFormControlSelect1" class="text"> Eliga la cantidad</label>
       <select name="cantidadcuerdas" required>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       </select>
        </form>
        </div>
        </div>
</div>
</div>
<br><br><br>';

echo
'<div class="card-deck">
<div class="card">
  <img src="baritono.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ukulele baritono</h5>
    <p class="card-text">$3500 c/u</p>
    
    <form method="POST" action="carrito.php">
        <input type="hidden" name="baritono" value="baritono" />
        <input type="hidden" name="DES" value="4" />
        <input type="hidden" name="Precio4" value="3500" />
       <button type="submit" value="4">Agregar al carrito</button>
       <div class="col-md-6 mb-6">
       <label for="exampleFormControlSelect1" class="text"> Eliga la cantidad</label>
       <select name="cantidadT" required>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
       </select>
       </div>
        </form>';
echo '</div>
</div>
<br>
<div class="card">
  <img src="capotraste.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Capotraste</h5>
    <p class="card-text">$350 c/u</p>
    
   <form method="POST" action="carrito.php">
        <input type="hidden" name="capotraste" value="capotraste" >
        <input type="hidden" name="DES" value="5" >
        <input type="hidden" name="Precio5" value="350" >
       <button type="submit" value="5">Agregar al carrito</button>
       <div class="col-md-6 mb-6">
       <label for="exampleFormControlSelect1" class="text"> Eliga la cantidad</label>
       <select name="cantidadP" required>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
       </select>

    </form>';    
    echo '</div></div></div>
<br>
<div class="card">
  <img src="cuerdas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cuerdas de ukulele</h5>
    <p class="card-text">$12</p>
     <form method="POST" action="carrito.php">
        <input type="hidden" name="cuerdas" value="cuerdas" />
        <input type="hidden" name="DES" value="6" />
        <input type="hidden" name="Precio6" value="12" />
        <button type="submit" value="6">Agregar al carrito</button>
        <div class="col-md-6 mb-6">
        <select name="cantidadcuerdas" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </select>
        </form> </div></div></div></div>';

?>