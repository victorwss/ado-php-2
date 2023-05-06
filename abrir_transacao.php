<?php
function abrir_transacao($conexao) {
    mysqli_autocommit($conexao, FALSE);
    mysqli_begin_transaction($conexao);
}
?>
