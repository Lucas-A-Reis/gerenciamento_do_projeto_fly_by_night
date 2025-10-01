<?php
 
/*Script de conexão ao servidor de banco de dados
Este arquivo é o responsavel por permitir a comunicação entre seu site/projeto e o servidor MySQL. */
 
 
 
$servidor = "localhost"; //padraão XAMPP
$banco = "flybynight_lucasaguiar";
$usuario = "root"; // padrão no XAMPP
$senha = ""; //padrão no XAMPP
 
/*Try/catch bloco condicional relacionado a verificalçoes de erro*/
 
try {
  //Criando um objeto de conexão usando a classe PDO (driver de acesso a BD)  
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $usuario, $senha);
 
    //Habilitando a exibição de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    //Configuração o modo de busca de dados para o formato ARRAY ASSOCIATIVO
    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}catch(PDOException $erro){
        die("Erro ao conectar: ".$erro->getMessage());
    }

?>