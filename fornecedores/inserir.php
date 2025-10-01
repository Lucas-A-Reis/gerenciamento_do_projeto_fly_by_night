
<?php
 
require_once "../src/fornecedor_crud.php";
 
/* Se o formulario com metodopost for acionado*/
 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Então vamos pegar o valor do campo chamado nome
    $nome = $_POST['nome'];
 
    // Chamamos a função, passamos os dados de conexão e o valor do nome digitado
    inserirFornecedor($conexao, $nome);
 
    // Redirecionamos para a pagina listar.php
    header("location:listar.php");
 }
 
 
?>
 
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir fornecedor</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Adicionando um novo fornecedor</h1>
 
    <form action="" method="post">
        <div>
            <label for="nome">Nome:</label>
            <!-- atributo required indica um campo obrigatório -->
            <input type="text" name="nome" id="nome" required>
        </div>
        <button type="submit">Salvar</button>
    </form>
 
    <a href="listar.php">← Voltar</a>
 
</body>
</html>
 