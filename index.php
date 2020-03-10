<?php
include("./Pessoa.php");
include("./database/connection.php");

$titulo = "Hello World!";

$pessoa = new Pessoa();
$rows = $pessoa->buscarTodos($connection);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title><?php echo $titulo ?></title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>

  <div class="jumbotron">
    <h1 class="text-center">
      <?= $titulo ?>
      <small>
        <?php echo date("d/m/Y H:i:s"); ?>
      </small>
    </h1>
  </div>

  <br>

  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col">Telefone</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $count = 1;
        foreach ($rows as $contato) :
        ?>

          <tr>
            <th scope="row"><?php echo $count++; ?></th>
            <td><?php echo $contato->nome ?></td>
            <td><?php echo $contato->email ?></td>
            <td><?php echo $contato->fone ?></td>
            <td><a href="contato_editar.php?id=<?php echo $contato->id ?>">Atualizar</a>
              <strong>|</strong>
              <a href="contato_excluir.php?id=<?php echo $contato->id ?>">Excluir</a></td>
            </td>
          </tr>

        <?php endforeach ?>

      </tbody>
    </table>

  </div>

  <div class="text-center">
    <a href="./cadastro.php" class="btn btn-success">Cadastrar contato</a>
  </div>

</body>

</html>