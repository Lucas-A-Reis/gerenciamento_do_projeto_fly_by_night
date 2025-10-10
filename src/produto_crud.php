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

function inserirProduto($conexao, $nome, $descricao, $preco, $quantidade, $fornecedor){

    $sql = "INSERT INTO produto (nome, descricao, preco, quantidade, fornecedor_id) VALUES (:nome, :descricao, :preco, :quantidade, :fornecedor_id)";
    $consulta = $conexao->prepare($sql);
    $consulta->bindValue(':nome', $nome);
    $consulta->bindValue(':descricao', $descricao);
    $consulta->bindValue(':preco', $preco);
    $consulta->bindValue(':quantidade', $quantidade);
    $consulta->bindValue(':fornecedor_id', $fornecedor);
    $consulta->execute();
}

?>