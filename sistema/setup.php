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
                  'iduser INT(2)  NOT NULL AUTO_INCREMENT,
                  user VARCHAR(16),
                  pass VARCHAR(16),
                  PRIMARY KEY (iduser),
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
// crear la tabla de compartir
      createtable('comentarios',
                  'Cuser VARCHAR (16),
                  Comentario VARCHAR(345)');
//crear la tabla para carrito y compra
      createTable('productos',
                'idproducto INT(2) NOT NULL AUTO_INCREMENT,
                ukeleles VARCHAR(20),
                extras VARCHAR(20),
                cantidad INT(2),
                descripcion VARCHAR(250),
                precio DOUBLE,
                PRIMARY KEY (idproducto),
                INDEX(ukeleles(6))');
   
      queryMysql('INSERT INTO productos (idproducto, ukeleles, extras, cantidad, descripcion, precio)VALUES
      ("", "soprano", "", "10", "El ukulele soprano es el mas pequeño de los ukeleles", "1500.00"), 
      ("", "concierto", "", "10", " El ukulele concierto es un poco mas grande que el soprano", "2000..00"), 
      ("", "tenor", "", "10", "El ukelele tenor tiene un tamaño de 67 cm", "3000.00"), 
      ("", "baritono", "", "10", " El ukelele barítono tiene la mayor longitud de escala", "3500.00"), 
      ("", "", "capotraste", "10", "Modifica el sonido del ukelele", "350.00"), 
      ("", "", "cuerdas", "10", "cuerdas", "12.00")');
   ?>

       <br>...done.
     </body>
   </html>
    
