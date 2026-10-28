<?php

// Constantes para armazenamento das variáveis de conexão.
define('HOST', '127.0.0.1');
define('PORT', '3306');
define('DBNAME', 'test');
define('USER', 'root');
define('PASSWORD', '');

try {
    // DSN correto do PDO
    $dsn = "mysql:host=" . HOST . ";port=" . PORT . ";dbname=" . DBNAME . ";charset=utf8";
    $pdo = new PDO($dsn, USER, PASSWORD);

    // Ativa os erros do PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão realizada com sucesso!";

} catch (PDOException $e) {
    echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' . $e->getMessage();
}