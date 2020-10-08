  <?php
  session_start();
    require_once 'header.php'; 
//para que el usuario se pueda salir ( cerrar session )
    if (isset($_SESSION['user']))
    { 
      destroySession(); 
      echo "<br><div class='center'>Has cerrado sesión. Por favor
           <a data-transition='slide' href='index.php'>clíck aqui</a> 
           para actualizar la pantalla.</div>"; 
    }
    else echo "<div class='center'>No puedes cerrar sesión porque
    Usted no se ha identificado </div>"; 

  ?>            
      </div> 
    </body> 
  </html> 