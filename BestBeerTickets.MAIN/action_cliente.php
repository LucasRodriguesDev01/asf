<?php
// Incluir o arquivo de configuração do banco de dados
include 'db_config.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirm_senha = $_POST['confirm_senha'];
    $telefone = $_POST['telefone'];

    // Verificar se as senhas coincidem
    if ($senha !== $confirm_senha) {
        echo "As senhas não coincidem!";
        exit;
    }

    // Hash da senha
    $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir dados na tabela
    $sql = "INSERT INTO tab_clientes (nome, cpf, email, senha, telefone) VALUES ('$nome', '$cpf', '$email', '$senha_hashed', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar para a página de aquisição de ingressos
        header("Location: adquirir_ingresso.php");
        exit;
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fechar conexão
    $conn->close();
}
?>
