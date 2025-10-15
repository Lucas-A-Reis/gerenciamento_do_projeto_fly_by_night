<?php
    require_once "../src/lojas_crud.php";
    $id = $_GET['id'];

    $loja = buscarLojasPorID($conexao, $id);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['nome'];
        editarLojas($conexao, $nome, $id);
        header("location:listar.php");
        exit;
    }
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojas editar</title>
</head>
<body>
    <h1>Editar Lojas</h1>

    <form action="" method="post">
        <input type="text">
    </form>
</body>
</html>