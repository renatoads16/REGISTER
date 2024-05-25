<?php
// Conexão com o banco de dados
include_once('conect.php');

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Verificar se as senhas coincidem
    if ($password !== $confirmPassword) {
        die("Erro: As senhas não correspondem.");
    }

    // Inserir dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, password) VALUES ('$nome', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar para a página de sucesso
        header("Location: insert.php");
        exit();
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }
}

// Fechar conexão
$conn->close();
