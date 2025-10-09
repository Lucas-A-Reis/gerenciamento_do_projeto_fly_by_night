<?php

require_once "../conecta.php";

function buscarProdutos($conexao){
    
    $sql = "SELECT 
        produto.id, produto.nome AS nome_produto, produto.preco, produto.quantidade, fornecedores.nome
        FROM produto JOIN fornecedores
        ON fornecedores.id = produto.fornecedor_id
        ORDER BY produto.nome";

    $consulta = $conexao->query($sql);

    return $consulta->fetchAll();
}

?>