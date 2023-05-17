<?php
require('conexao.php');

$id = $_POST['id'];
$descricao = $_POST['descricao'];
$marca = $_POST['marca'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];

$query = "UPDATE produtos 
          SET descricao = '$descricao', marca = '$marca', estoque = '$estoque', preco = '$preco' 
          WHERE id = $id";
mysqli_query($conexao, $query);

mysqli_close($conexao);
?>
<a href="select.php">Lista</a>
