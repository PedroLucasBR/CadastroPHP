<?php
include("./database/connection.php");
include("./pessoa.php");

if ($_POST) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $query = "INSERT INTO contatos (nome, email, fone) VALUES (:r_nome, :r_email, :r_fone)";

    $insert = $connection->prepare($query);
    $insert->bindParam(":r_nome", $nome);
    $insert->bindParam(":r_email", $email);
    $insert->bindParam(":r_fone", $telefone);

    $result = $insert->execute();

    if ($result && $insert->rowCount()) {
        echo "O contato <b>{$nome}</b> foi salvo com sucesso!";
    } else {
        echo "Houve um erro ao salvar o contato.";
    }
} else {
    header("location: ./cadastro.php");
}
