<?php 
require_once 'header.php';

echo <<<_END
  <script>
    function checkUser(user) {
	    if (user.value == '') {
		    $('#used').html('&nbsp;')
		    return
	    }
	    $.post ( 'checkuser.php', { user : user.value },
	      function(data) {
		      $('#used').html(data)
	      }
      )
    }
  </script>
_END;

$error = $user = $pass =""; 
if (isset($_SESSION['user'])) destroySession(); 

if (isset($_POST['user'])) {
  $user = sanitizeString($_POST['user']); 
  $pass = sanitizeString($_POST['pass']); 

	if ($user == "" || $pass == "") 
		$error = 'No se llenaron todos los campos<br></br>'; 
	else {
		$result = queryMysql("SELECT * FROM members WHERE user='$user'");

		if ($result->num_rows) 
			$error = 'ese nombre de usuario ya existe<br></br>'; 
		else {
			queryMysql("INSERT INTO members VALUES('$user', '$pass')"); 
			die('<h4>Cuenta creada</h4>Por favor Iniciar sesión.</div></body></html>'); 
		}
	}
}

echo <<<_END
      <form method='post' action='signup.php'>$error
      <div data-role='fieldcontain'>
        <label></label>
        Por favor ingrese sus datos para inscribirse
      </div>
      <div data-role='fieldcontain'>
        <label>Username</label>
        <input type='text' maxlength='16' name='user' value='$user'
         onBlur='checkUser(this)'>
        <label></label><div id='used'>&nbsp;</div>
      </div>
      <div data-role='fieldcontain'>
        <label>Password</label>
        <input type='text' maxlength='16' name='pass' value='$pass'
      </div>
      <div data-role='fieldcontain'>
        <label></label> <br>
       <input data-transition='slide' type='submit' value='SignUp'>
      </div>
    </div>
  </body>
</html>
_END;
?>

