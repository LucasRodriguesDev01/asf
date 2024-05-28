<?php
// Incluir o arquivo de configuração do banco de dados
include 'db_config.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $data_nascimento = $_POST['data_nascimento'];
    $status = $_POST['status'];
    $foto = $_POST['foto'];

    // Inserir dados na tabela
    $sql = "INSERT INTO tab_clientes (nome, cpf, email, telefone, celular, data_nascimento, status, foto) VALUES ('$nome', '$cpf', '$email', '$telefone', '$celular', '$data_nascimento', '$status', '$foto')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fechar conexão
    $conn->close();
}
?>
