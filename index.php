<?php
include("./listar_pessoas.php");

$titulo = "Hello World!";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titulo ?></title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">

    <h1 class="text-center">
      <?= $titulo ?>
      <small>
        <?php echo date("d/m/Y H:i:s"); ?>
      </small>
    </h1>
    <h3>Pessoas:</h3>
    <ul>
      <?php foreach ($pessoas as $pessoa) : ?>
        <li> <?php echo $pessoa->nome ?> : <?php echo $pessoa->email ?> - <?php echo $pessoa->fone ?>
        </li> <?php endforeach ?> </ul>
    <div class="text-center">
      <a href="./cadastro.php" class="btn btn-success">Página de cadastro</a>
    </div>
  </div>
</body>

</html>