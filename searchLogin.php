<?php
session_start();
include_once('conect.php');

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email']; // Corrigido para $_POST em vez de $_GET
    $password = $_POST['password']; // Corrigido para $_POST em vez de $_GET

    // Consulta ao banco de dados para verificar as credenciais
    // Utilizando declaração preparada para evitar injeção de SQL
    $sql = "SELECT * FROM usuarios WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se há correspondências de usuário
    if ($result->num_rows > 0) {
        // Autenticação bem-sucedida
        $_SESSION['email'] = $email;
        echo "success"; // Retorna uma mensagem indicando o sucesso da autenticação
    } else {
        // Credenciais inválidas
        echo "error de credenciais"; // Retorna uma mensagem indicando que as credenciais são inválidas
    }
} else {
    // Campos de e-mail ou senha vazios
    echo "error de campos"; // Retorna uma mensagem indicando que os campos estão vazios
}
?>
