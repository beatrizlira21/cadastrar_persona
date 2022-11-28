<h1>Cadastro de Usuário</h1>

<?php

switch ($_REQUEST["acao"]){
  case 'cadastrar':
    try {
    
      $sql = $pdo->prepare('INSERT INTO usuarios (nome, telefone, email, data_nasc) VALUES(:nome, :telefone, :email, :nasc)');
      $sql->execute(array(
        ':nome' => $_POST['nome'],
        ':telefone' => $_POST['telefone'],
        ':email' => $_POST['email'],
        ':nasc' => $_POST['nascimento']
      ));

      echo $sql->rowCount();
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      print"<script>
            location.href('?page=listar');
            </script>"; 
    }
    if($sql==true){
      print"<script>
              alert('Cadastro realizado com sucesso!');
            </script>";
            print"<script>
            location.href='?page=listar';
            </script>"; 

    } break;
  case 'editar':
    try {  
      $id = $_POST['id'];     
      $nome = $_POST['nome'];
      $tel = $_POST['telefone'];
      $email = $_POST['email'];
      $nasc = $_POST['nascimento'];

      $sql = $pdo->prepare('UPDATE usuarios SET nome = :nome, telefone = :tel, email =  :email, data_nasc = :nasc WHERE id = :id');
      $sql->execute(array(
      ':id' => $id,
      ':nome' => $nome,
      ':tel' => $tel,
      ':email' => $email,
      ':nasc' => $nasc
      ));

      echo $sql->rowCount();
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      print"<script>
            location.href('?page=listar');
            </script>"; 
      if($sql==true){
        print"<script>
                alert('Alterações feitas com sucesso!');
              </script>";
              print"<script>
              location.href='?page=listar';
              </script>"; 
      }else{
        print"<script>
                alert('Não foi possível editar os seus dados!');
              </script>";
              print"<script>
              location.href='?page=editar';
              </script>"; 
      }

    }break;
  case 'excluir':
    try {
      $id = $_REQUEST['id'];

      $sql = $pdo->prepare('DELETE FROM usuarios WHERE id = :id');
      $sql->bindParam(':id',$id);
      $sql->execute();

      echo $sql->rowCount();
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
  }
  if($sql==true){
    print"<script>
            alert('Deletado com sucesso!');
          </script>";
          print"<script>
          location.href='?page=listar';
          </script>"; 
  }else{
    print"<script>
            alert('Não foi possível excluir!');
          </script>";
          print"<script>
          location.href='?page=listar';
          </script>"; 
  }

}


?>
