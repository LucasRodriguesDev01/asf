
<?php
$servername = "localhost";  // Nome do servidor do banco de dados
$username = "root";         // Nome de usuário do banco de dados
$password = "12345";             // Senha do banco de dados
$dbname = "db_beer";        // Nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
