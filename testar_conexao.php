<?php
$conexao = new mysqli('localhost', 'root', '', 'meu_banco_de_dados');
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}
$conexao->close();
?>
