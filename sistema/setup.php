   <!DOCTYPE html>
   <html>
     <head>
       <title>setting up database</title>
    </head>
    <body>

      <h3> Setting up...</h3>

    <?php // example 263: setup.php
      require_once 'functions.php';

      createtable('members',
                  ' user VARCHAR(16),
                  pass VARCHAR(16),
                  INDEX(user(6))');
// crear la tabla de mensajes
      createtable('messages',
                  'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  auth VARCHAR(16),
                  recip VARCHAR(16),
                  pm CHAR(1),
                  time INT UNSIGNED,
                  message VARCHAR(4096),
                  INDEX(auth(6)),
                  INDEX(recip(6))');
// crear la tabla de amigos
      createtable('friends',
                  'user VARCHAR(16),
                  friend VARCHAR(16),
                  INDEX(user(6)),
                  INDEX(friend(6))');
// crear la tabla de perfiles
      createtable('profiles',
                  'user VARCHAR(16),
                  text VARCHAR(4096),
                  INDEX(user(6))');
   ?>

       <br>...done.
     </body>
   </html>
    
