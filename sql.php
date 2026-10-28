<?php

// Definindo os parâmetros de conexão:
define('HOST', '127.0.0.1');
define('PORT', '5432');
define('DBNAME', 'test');
define('USER', 'user');
define('PASSWORD', 'psswd');

// try e catch para tratamento de exceção
try {

  // Estabelecendo a conexão com o banco:
  $dsn = "pgsql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME;
  $conexao = new PDO($dsn, USER, PASSWORD);
  
  // Ativa erros do PDO
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  echo "Conexão com PostgreSQL realizada com sucesso!";

} catch (PDOException $e) {
  echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' .$e->getMessage();
}

$conexao = null;

?>