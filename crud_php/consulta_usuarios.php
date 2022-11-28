<h1>Pessoas</h1>
<?php
$sql = $pdo->query("SELECT * FROM usuarios");

if($sql){
  print "<table class='table table-hover table-bordered'>";

  print "<tr>";
  echo "<th>#</th>";
  echo "<th>Nome</th>";
  echo "<th>Telefone</th>";
  echo "<th>E-mail</th>";
  echo "<th>Nascimento</th>";
  echo "<th>Opções</th>";

while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
  $date = $row['data_nasc'];
  $timestamp = strtotime($date);

  print "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['nome']."</td>";
  echo "<td>".$row['telefone']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".date('d/m/y', $timestamp)."</td>";
  echo "<td>
          <button onclick=\"location.href='?page=editar&id=".$row['id']."';\" class='btn btn-success p-1 pb-0'><span class='material-symbols-outlined'>edit</span></button>
          <button onclick=\"if(confirm('Confirma que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row['id']."';}else{false;}\" class='btn btn-danger p-1 pb-0'><span class='material-symbols-outlined'>delete</span></button>
        </td>";
}
"</table>";
}else{
  print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>