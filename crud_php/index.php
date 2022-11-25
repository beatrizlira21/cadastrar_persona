<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastrar</title>
  </head>
  <body>
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Inicial</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?page=novo">Cadastrar Usuário</a>
  <li class="nav-item">
    <a class="nav-link" href="?page=listar">Usuários</a>
  </li>
</ul>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
      <?php
        include('config.php');
        switch(@$_REQUEST["page"]){
          case "novo":
            include("novo_usuario.php");
          break;
          case "listar":
            include("consulta_usuarios.php");
          break; 
            case "salvar":
              include("inserir_usuario.php");
          break;    
          default:
            echo "Página inicial!";            
        }
      ?>

      </div>
    </div>
  </div>


    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>