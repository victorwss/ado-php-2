<?php
function conexao() {
    // configurações de conexão
    $servidor = "localhost";
    $usuario = "seu_usuario";
    $senha = "sua_senha";
    $banco = "seu_banco";

    // conexão com o banco de dados
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    // verifica se houve erro na conexão
    if (!$conexao) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    // retorna a conexão
    return $conexao;
}
?>