<?php
$servername = "localhost";
$username = "root"; // ou o usuário correto
$password = ""; // ou a senha do seu banco
$dbname = "folha_de_ponto"; // nome correto do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>
