<?php
require_once "../src/lojas_crud.php";
$id = $_GET['id'];
deletarLojas($conexao, $id);
header("location:listar.php");
exit;
?>