<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meu_banco_de_dados";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$texto = $_POST['texto'];


// Prepara a consulta SQL
$sql = "INSERT INTO textos (texto) VALUES ('$texto')";

// Executa a consulta e verifica se foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
    header("Location: http://localhost/index/");
exit;
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
