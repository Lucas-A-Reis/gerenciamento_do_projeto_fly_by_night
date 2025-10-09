<?php
 
require_once "../src/produto_crud.php";
 
$produtos = buscarProdutos($conexao);
 
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
     <th> Fornecedor </th>
     <th> Ações </th>
 
</tr>
<?php foreach($produtos as $produto): ?>
<tr>
  
  <td> <?=$produto['nome_produto']?> </td>
  <td> <?=$produto['preco']?> </td>
  <td> <?=$produto['quantidade']?> </td>
  <td> <?=$produto['nome']?> </td>
  <td>

    <a href="editar.php">Editar</a>
    <a class="excluir" href="excluir.php">Excluir</a>

  </td>

</tr>
<?php endforeach?>
</table>

<script src="../js/confirmar_exclusao.js"></script>

</body>
</html>