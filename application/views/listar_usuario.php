
<!-- Bootstrap core CSS -->
<link href="<?php base_url(); ?>../assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="<?php base_url(); ?>../assets/css/dashboard.css" rel="stylesheet">

<main class="row col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3 main">
  <div class="col-md-10">
    <h1 class="page-header"> Usuários</h1>
  </div>

  <div class="col-md-2">
    <a class="btn btn-primary btn-block" href="<?= base_url(); ?>usuario/cadastro"> Novo Usuário</a>
  </div>

  <div class="col-md-12">
    <table class="table table-striped">
      <tr>
        <th> ID </th>
        <th> Nome </th>
        <th> Email </th>
        <th> Nível </th>
        <th> Status </th>
        <th> </th>
        <th> </th>
      </tr>
      <?php foreach ($usuarios as $user) { ?>
        <tr>
          <td> <?= $user->idUsuario; ?> </td>
          <td> <?= $user->nome; ?> </td>
          <td> <?= $user->email; ?> </td>
          <td> <?= $user->nivel==1?'Administrador':'Usuário'; ?> </td>
          <td> <?= $user->status==1?'Ativo':'Inativo'; ?> </td>
          <td>
            <a href="<?= base_url('usuario/atualizar/'.$user->idUsuario); ?>" class="btn btn-primary btn-group mr-2"> Atualizar
              <a href="<?= base_url('usuario/excluir/'.$user->idUsuario); ?>" class="btn btn-danger btn-group mr-0"
                onclick="return confirm('Deseja realmente remover esse usuário?'); "> Remover
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>


    </main>
  </div>
</div>
