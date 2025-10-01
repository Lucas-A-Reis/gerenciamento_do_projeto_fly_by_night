<?php
require_once "../src/fornecedor_crud.php";

$id = $_GET['id'];

$fornecedor = buscarFornecedorPorId($conexao, $id);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['nome'];
    atualizarFornecedor($conexao, $nome, $id);
    header("location:listar.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar fornecedor</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Editar um fornecedor registrado</h1>
 
    <form action="" method="post">
        <input value="<?=$fornecedor['id']?>" type="hidden" name="id">
        <div>
            <label for="nome">Nome:</label>
            <input value="<?=$fornecedor['nome']?>" type="text" name="nome" id="nome" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
 
    <a href="listar.php">← Voltar</a>
</body>
</html>
 