<?php 
  session_start();
  require_once 'header.php';

  echo "<div class='center'> <br> <b> Bienvenido a nuestro 
   espacio donde compartir puros buenos momentos con tu ukulele <b> <br>";

  if($loggedin) echo "$user, Esta usted registrado	";
  else          echo 'porfavor registrate.';

  echo <<<_END
	 </div><br>
	</div >
	<div data-role="footer">
	  <h4>Web App from <i><a href='http://localhost/WEB--ANA/sistema'
	  target='_blank'>Web Development</a></i></h4>
	  <center><p>Hecho en México. Centro de bachillerato tecnologico 
	  industrial y de servicios No.
	  253, todos los derechos reservados 2020. Esta 
	  página puede ser reproducida con fines no lucrativos, siempre y cuando no 
	  se mutile, se cite la fuente completa y su dirección electrónica, 
	  de otra forma, requiere permiso previo por escrito de la institución. 
	  </p></center>
	</div>
	</body>
	</html>
_END;


?>


