<?php
require_once "../src/lojas_crud.php";
$lojas = buscarLojas($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojas</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <table>
        <caption> Relação de lojas</caption>
            <tr>
                <th> ID </th>
                <th> Nome </th>
                <th> Ações </th>
 
            </tr>
  
    <?php foreach($lojas as $loja) : ?>
            <tr>
                <td><?=$loja['id']?></td>
                <td><?=$loja['nome']?></td>
                <td>
                    <a href="editar.php">Editar</a>
                    <a href="excluir.php">Excluir</a>
                </td>
            </tr>
    <?php endforeach; ?>
</table>
</body>
</html>