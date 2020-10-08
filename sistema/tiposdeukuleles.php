
<?php
session_start();
require_once 'header.php';
echo
'<br>
<center><h1>TIPOS DE UKULELES</h1></center>
 <section class="container mt-3 pt-3"> 
   <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="soprano.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">SOPRANO</h5>
      <p class="card-text">El ukulele soprano es el mas pequeño de los ukeleles con una longitud total de 53 cm, es el mas usado en el mundo y de los más económicos su sonido es el más agudo.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="concierto.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">CONCIERTO</h5>
      <p class="card-text"> El ukulele concierto es un poco mas grande que el soprano con  una longitud total de 58 cm, es más cómodo de tocar pero depende de factores como el tamaño de las manos, tiene entre 14-12 trastes.Cuenta con el mayor tamaño de caja de resonancia ofreciendo un mayor volumen.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="tenor.png" alt="Card image cap" width="500">
    <div class="card-body">
      <h5 class="card-title">TENOR</h5>
      <p class="card-text">El ukelele tenor tiene un tamaño de 67 cm, se utiliza mucho en fingerpicking. La escala permite tener los trastes más separados, facilitando la digitación y la formación de acordes, el mayor tamaño de separación facilita el rasgueo.Su caja de resonancia ofrece sonidos más graves. </p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="baritono.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">BARITONO</h5>
      <p class="card-text"> El ukelele barítono tiene la mayor longitud de escala, se afina en G6, y coincide con las 4 primeras cuerdas de una guitarra, si eres guitarrista te adaptarás muy fácil a él. Su afinación lineal y su sonido grave se aparta un poco del sonido característico del ukelele.  </p>
    </div>
  </div>
</div>
</section>'

?>