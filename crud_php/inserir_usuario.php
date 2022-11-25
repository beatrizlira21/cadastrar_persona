<?php

try {

  $stmt = $pdo->prepare('INSERT INTO usuarios (nome, telefone, email, data_nasc) VALUES(:nome, :telefone, :email, :nasc)');
  $stmt->execute(array(
    ':nome' => $_POST['nome'],
    ':telefone' => $_POST['telefone'],
    ':email' => $_POST['email'],
    ':nasc' => $_POST['nascimento']
  ));

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?>
