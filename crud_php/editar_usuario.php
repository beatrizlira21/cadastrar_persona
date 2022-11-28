<h1>Editar Usuário</h1>
<?php
$sql = $pdo->query('SELECT * FROM usuarios WHERE id ='.$_REQUEST['id']);
$row = $sql->fetch();
$id = $row['id'];
$nome = $row['nome'];
$tel = $row['telefone'];
$email = $row['email'];
$nasc = $row['data_nasc'];

?>

<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php print $id; ?>">
  <div class="mb-3">
    <label >Nome</label>
    <input type="text" name="nome" class="form-control" value="<?php print $nome;?>">
  </div>
  <div class="mb-3">
    <label>Telefone</label>
    <input type="tel" name="telefone" class="form-control" value="<?php print $tel;?>">
  </div>
  <div class="mb-3">
    <label>E-mail</label>
    <input type="email" name="email" class="form-control" value="<?php print $email;?>" >
  </div>  
  <div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="nascimento" class="form-control" value="<?php print $nasc;?>">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">ENVIAR</button>
  </div>

</form>

