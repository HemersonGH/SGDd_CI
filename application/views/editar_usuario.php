
<!-- Bootstrap core CSS -->
<link href="<?php base_url(); ?>../../assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="<?php base_url(); ?>../../assets/css/dashboard.css" rel="stylesheet">

<main class="row col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3 main">
  <div class="col-md-12">
    <h1 class="page-header"> Atualizar Usuário</h1>
  </div>

  <div class="col-md-12">
    <form class="form-control" action="<?= base_url(); ?>usuario/salvar_atualizacao" method="post">
      <input type="hidden" id="idUsuario" name="usuario" value="<?= $usuario[0]->idUsuario; ?>">
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="namelHelp" value="<?= $usuario[0]->nome ?>" required>
        <!-- <small id="namelHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="<?= $usuario[0]->nome ?>" required>
          </div>
        </div>
        <div class="col-md-7">
          <label for="endereco">Endereço:</label>
          <input type="text" class="form-control" id="endereco" name="endereco" value="<?= $usuario[0]->endereco ?>" required>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label for="nivel">Nível:</label>
            <select id="nivel" name="nivel" class="form-control" required>
              <option value="0"> ----- </option>
              <option value="1" <?= $usuario[0]->nivel == 1? 'selected':''; ?> > Administrador </option>
              <option value="2" <?= $usuario[0]->nivel == 2? 'selected':''; ?> > Usuário </option>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $usuario[0]->email ?>" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="password">Senha:</label>
            <input type="button" class="btn btn-default btn-block" value="Atualizar Senha" disabled>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" name="status" class="form-control" required>
              <option value="0"> ----- </option>
              <option value="1" <?= $usuario[0]->status == 1? 'selected':''; ?>  > Ativo </option>
              <option value="2" <?= $usuario[0]->status == 2? 'selected':''; ?>  > Inativo </option>
            </select>
          </div>
        </div>
      </div>

      <div style="text-align: right">
        <button type="reset" class="btn btn-default" >Cancelar</button>
        <!-- <button type="btn" class="btn btn-default" href=" base_url(); usuario" >Cancelar</button> -->
        <button type="submit" class="btn btn-success">Atualizar</button>
      </div>

    </form>
  </div>

</main>
</div>
</div>
