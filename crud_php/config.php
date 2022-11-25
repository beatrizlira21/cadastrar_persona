<?php

  define('PASS', '');
  define('BASE','estudosphp');


  $pdo = new PDO('mysql:host=localhost;dbname=estudosphp', USER, PASS);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>