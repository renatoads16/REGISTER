<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "renato";
$password = "R3@162397"; // Lembre-se de inserir a senha se ela existir
$dbname = "register";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!<br>";
}

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
?>
