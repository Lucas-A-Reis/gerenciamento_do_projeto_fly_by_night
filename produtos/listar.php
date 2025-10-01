<?php
 
//Importa o arquivo de funções CRUD para Fornecedores
require_once "../src/fornecedor_crud.php";
 
//Chama a função (passando a conexão) e recebe um array associativo com  os dados
$fornecedores = buscarFornecedores($conexao);
 
/*Testando a exibição dos dados somente para o progamador
echo"<pre>";
var_dump($fornecedores); //Visualizar Array Associativo
echo "</pre>"; */
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
 
<h1>Produtos</h1>
<a href="inserir.php">+ Novo Produtos</a>
<a href="../index.php">⬅️ Voltar</a>
 
<!--Estruturando uma tabela HTML para exibir os dados-->
 
<table>
  <caption> Relação de Produtos</caption>
  <tr>

     <th> Nome </th>
     <th> Preço </th>
     <th> Quantidade </th>
     <th> Ações </th>
     <th> Fornecedor </th>
 
</tr>

<tr>
  
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td>

    <a href="editar.php">Editar</a>
    <a class="excluir" href="excluir.php">Excluir</a>

  </td>

</tr>
</table>

<script src="../js/confirmar_exclusao.js"></script>

</body>
</html>