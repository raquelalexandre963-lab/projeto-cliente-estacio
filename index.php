<?php
// Constantes de conexão
define('HOST', '127.0.0.1');
define('DBNAME', 'test');
define('USER', 'user');
define('PASSWORD', 'psswd');

// Conectando com o Servidor
$conn = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die('Não foi possível conectar: ' . mysqli_connect_error());

// Realizando uma consulta no BD
$instrucaoSQL = "SELECT nome, cpf, telefone FROM Cliente";
$stmt = mysqli_prepare($conn, $instrucaoSQL);

if ($stmt) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $nome, $cpf, $tel);

    while (mysqli_stmt_fetch($stmt)) {
        echo $nome . "\t";
        echo $cpf . "\t";
        echo $tel . "\n";
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Erro na consulta: " . mysqli_error($conn);
}

// Encerrando a conexão
mysqli_close($conn);
?>