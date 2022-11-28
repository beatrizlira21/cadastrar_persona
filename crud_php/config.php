<?php

  define('PASS', '');
  define('USER','root');


  $pdo = new PDO('mysql:host=localhost;dbname=estudosphp', USER, PASS);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>