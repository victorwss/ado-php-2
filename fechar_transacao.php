<?php
function fechar_transacao($conexao) {
    mysqli_commit($conexao);
    mysqli_autocommit($conexao, TRUE);
}
?>
