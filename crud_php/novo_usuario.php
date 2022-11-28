<h1>Cadastrar Usuário</h1>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-3">
    <label >Nome</label>
    <input type="text" name="nome" class="form-control">
  </div>
  <div class="mb-3">
    <label>Telefone</label>
    <input type="tel" name="telefone" class="form-control">
  </div>
  <div class="mb-3">
    <label>E-mail</label>
    <input type="email" name="email" class="form-control" >
  </div>  
  <div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="nascimento" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">ENVIAR</button>
  </div>

</form>