<?php 
require_once "../conecta.php";

function buscarLojas($conexao){
    $sql = "SELECT * FROM lojas ORDER BY nome";
    $stmt = $conexao->query($sql);
    return $stmt->fetchAll();
}

function editarLojas($conexao, $nome, $id){
    $sql = "UPDATE nome FROM lojas SET nome = :nome WHERE id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt-> bindValue($nome, ":nome");
    $stmt-> bindValue($id, ":id");
    $stmt-> execute();
}

function buscarLojasPorID($conexao, $id){
    $sql = "SELECT * FROM lojas WHERE id = :id";
    $stmt = $conexao-> query($sql);
    $stmt-> bindValue($id, ":id");
    $stmt-> execute();
    return $stmt-> fetch();
}

function inserirLojas($conexao, $nome){
    $sql = "INSERT lojas (nome) VALUES (:nome)";
    $stmt = $conexao-> prepare($sql);
    $stmt-> bindValue($nome, ":nome");
    $stmt-> execute();
}

function deletarLojas($conexao, $id){
    $sql = "DELETE FROM lojas WHERE id = :id";
    $stmt = $conexao-> prepare($sql);
    $stmt-> bindValue($id, ":id");
    $stmt-> execute();
}
?>