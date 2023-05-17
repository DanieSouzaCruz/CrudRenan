<?php 
require('conexao.php');
$id = (int)$_GET['id'];

if ($id > 0) {
    $stmt = $conexao->prepare("DELETE FROM produtos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

$conexao->close();
?>

<a href="select.php">Lista</a>
