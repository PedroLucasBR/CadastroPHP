<?php

include('./database/connection.php');
include('./pessoa.php');

$query = "SELECT nome, email, fone FROM contatos";

$select = $connection->prepare($query);
$select->execute();

$pessoas = $select->fetchAll(PDO::FETCH_OBJ);