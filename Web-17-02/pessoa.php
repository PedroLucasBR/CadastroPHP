<?php

class Pessoa
  {
    private $nome;

    private $email;

    
    public function __construct($nome = null, $email = null)
    {
      $this->nome = $nome;
      $this->email = $email;
    }
    

    public function setNome($nome)
    {
      $this->nome = $nome;
    }

    public function setEmail($email)
    {
      $this->email = $email;
    }

    public function getNomeCompleto()
    {
      return "{$this->nome} {$this->email}";
    }

    public function receiveData($post)
    {
      $this->nome = $post["nome"];
      $this->sobrenome = $post["email"];
      $telefone = $post["telefone"];
    }
  }