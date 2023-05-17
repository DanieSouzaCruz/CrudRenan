<?php
$endereco = 'localhost';
$usuario = 'root';
$senha = '';
$base = 'unicv_web';

$conexao = new mysqli($endereco, $usuario, $senha, $base);

if ($conexao->connect_errno) {
    die("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}
?>
