<?php

    function listarDados() {
        require_once('abrir_transacao.php');
        
        $query = "SELECT * FROM medicamento";
        $result = mysqli_query($conexao, $query);
        
        require_once('fechar_transacao.php');
        
        return $result;
    }

    function inserirDados($nome_comum, $nome_substancia, $tarja, $preco, $tipo, $qtd_por_caixa, $unidade_medida, $fabricante) {
        require_once('abrir_transacao.php');
        
        $query = "INSERT INTO medicamento (nome_comum, nome_substancia, tarja, preco, tipo, qtd_por_caixa, unidade_medida, fabricante) 
                VALUES ('$nome_comum', '$nome_substancia', '$tarja', '$preco', '$tipo', '$qtd_por_caixa', '$unidade_medida', '$fabricante')";
        $result = mysqli_query($conexao, $query);
        
        require_once('fechar_transacao.php');
        
        return $result;
    }

    function alterarDados($chave, $nome_comum, $nome_substancia, $tarja, $preco, $tipo, $qtd_por_caixa, $unidade_medida, $fabricante) {
        require_once('abrir_transacao.php');
        
        $query = "UPDATE medicamento 
                SET nome_comum='$nome_comum', nome_substancia='$nome_substancia', tarja='$tarja', preco='$preco', tipo='$tipo', 
                    qtd_por_caixa='$qtd_por_caixa', unidade_medida='$unidade_medida', fabricante='$fabricante' 
                WHERE chave=$chave";
        $result = mysqli_query($conexao, $query);
        
        require_once('fechar_transacao.php');
        
        return $result;
    }

    function excluirDados($chave) {
        require_once('abrir_transacao.php');
        
        $query = "DELETE FROM medicamento WHERE chave=$chave";
        $result = mysqli_query($conexao, $query);
        
        require_once('fechar_transacao.php');
        
        return $result;
    }

    function lerDados($chave) {
        require_once('abrir_transacao.php');
        
        $query = "SELECT * FROM medicamento WHERE chave=$chave";
        $result = mysqli_query($conexao, $query);
        
        require_once('fechar_transacao.php');
        
        return $result;
    }   

?>
