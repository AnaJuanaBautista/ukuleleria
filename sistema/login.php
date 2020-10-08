<?php 
require_once 'header.php'; 
$error = $user = $pass =""; 

if (isset($_POST['user']))
{ 
  $user = sanitizeString($_POST['user']); 
  $pass = sanitizeString($_POST['pass']); 

  if ($user == "" || $pass == "") 
    $error = 'No todos los campos fueron introducidos'; 
  else
  { 
    $result = queryMySQL("SELECT user,pass FROM members
      WHERE user='$user' AND pass='$pass'"); 

    if ($result->num_rows == 0)
    { 
      $error = "Intento de inicio de sesión no válido"; 
    } 
    else 
    { 
      $_SESSION['user'] = $user; 
      $_SESSION['pass'] = $pass; 
      die("<br><div class='center'>Ahora ha iniciado sesión. Por favor
           <a data-transition='slide' href='members.php?view=$user'>click aqui</a> 
           para continuar.</div></body></html>"); 
     }
   }
 }

  echo <<<_END
    <form method='post' action='login.php'>
      <div data-role='fieldcontain'>
        <label></label>
        <span class='error'>$error</span>
      </div>
      <div data-role='fieldcontain'>
        <label></label>
        Por favor, introduzca sus datos para iniciar sesión.
      </div>
      <div data-role='fieldcontain'>
        <label>Username</label>
        <input type='text' maxlength='16' name='user' value='$user'>
      </div>
      <div data-role='fieldcontain'>
        <label>Password</label>
        <input type='password' maxlength='16' name='pass' value='$pass'>
      </div>
      <div data-role='fieldcontain'>
        <label></label>
        <input data-transition='slide' type='submit' value='login'>
      </div>
     </form>
    </div>
  </body>
  </html>
_END;
?> 
