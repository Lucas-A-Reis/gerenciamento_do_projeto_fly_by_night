<?php
 
/* Neste arquivo teremos todas as funções que serão usadas para manipulação (CRUD) de fornecedores em nosso sistema e banco de dados */
 
 
 
 
//Acessando o script de conexão ao BD
require_once "../conecta.php";
 
 
/* Retornará um array assaciativo com os fornecedores */
function buscarFornecedores($conexao){
    $sql = "SELECT * FROM fornecedores ORDER BY nome";
 
    //Executamos o comando e guardamos o resultado da consulta
   $consulta = $conexao->query($sql);
 
   //Retornamos o resultado em formato de Array Associativo
   return $consulta->fetchAll();
 
}
 
/* Receber o nome de um novo fornecedor e inserir no BD*/
function inserirFornecedor($conexao, $nome){
   
    /* Montando o comando SQL de INSERT e aplicando um "named parameter (parametro nomeado)". Um parametro nomeado nada mais é que reservar um espaço para atribuir um valor ao comando */
 
    $sql = "INSERT INTO fornecedores (nome) VALUES(:nome)";
 
   //Prepare o comando acima antes de executar no BD.
    $consulta = $conexao->prepare($sql);
 
    //anexar/atrelar/colocar um valor
    $consulta->bindValue(":nome", $nome);
 
    //Executamos a consulta com o comando e o valor
    $consulta->execute();
 
 
}

function buscarFornecedorPorId($conexao, $id){
    $sql = "SELECT * FROM fornecedores WHERE id = :id";
    
    // prepare: coloca a comando sql em memória
    $consulta = $conexao->prepare($sql);
    
    // bindValue: liga o valor ($id) ao parâmetro (:id)
    $consulta -> bindValue(':id', $id);

    // execute: roda a query/consulta no banco
    $consulta -> execute();

    // retorna o resultado da consulta como um array
    return $consulta->fetch();
}

function atualizarFornecedor($conexao, $nome, $id){
    $sql = "UPDATE fornecedores SET nome = :nome WHERE id = :id";
    $consulta = $conexao->prepare($sql);

    $consulta->bindValue(":nome", $nome);
    $consulta->bindValue(":id", $id);

    $consulta->execute();
}

function excluirFornecedor($conexao, $id){
    $sql = "DELETE FROM fornecedores WHERE id = :id";
    $consulta = $conexao->prepare($sql);
    $consulta->bindValue(':id', $id);
    $consulta->execute();
}