<?php
include("./Pessoa.php");
include("./database/connection.php");

if ($_GET && $_GET["id"]) {
  $contato = new Pessoa();
  $registro = $contato->getById($connection, $_GET["id"]);

  if (!$registro) {
    $erro = "O código [{$_GET["id"]}] não foi encontrado!";
  }
} else {
  $erro = "Erro de parâmetro!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atualização de contato</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="jumbotron">
      <h2>Atualizar contato</h2>
    </div>

    <?php if (isset($erro)) : ?>

      <div class="alert alert-danger">
        <?php echo $erro ?>
      </div>

    <?php endif ?>

    <?php if (!isset($erro)) : ?>
      <form action="./contato_editar_salvar.php" method="post">
        <div class="row">
          <div class="col">
            <label for="">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="<?php echo $registro->nome ?>" required>
          </div>
          <div class="col">
            <label for="">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="<?php echo $registro->email ?>" required>
          </div>
          <div class="col">
            <label for="">Telefone</label>
            <input type="text" class="form-control" name="telefone" data-mask="(00) 00000-0000" placeholder="<?php echo $registro->fone ?>" required>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">

            <input type="hidden" name="id" value="<?php echo $registro->id ?>">

            <button class="btn btn-success btn-block" type="submit">Salvar</button>
          </div>
        </div>
      </form>
    <?php endif ?>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

</body>

</html>