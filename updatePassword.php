<?php
session_start();

require 'conect.php'; // Conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senhaAleatoria = $_POST['senhaAleatoria'];
    $novaSenha = $_POST['novaSenha'];
    $confirmSenha = $_POST['confirmPassword'];

    // Verifica se as senhas são iguais
    if ($novaSenha != $confirmSenha) {
        $_SESSION['message'] = "As senhas não correspondem.";
        header('Location: resetPass.php');
        exit();
    }

    // Verifica se o token enviado corresponde a um registro na tabela 'password_resets'
    $stmt = $conn->prepare("SELECT * FROM password_resets WHERE email = ? AND token = ?");
    $stmt->bind_param('ss', $email, $senhaAleatoria);
    $stmt->execute();
    $result = $stmt->get_result();
    $reset = $result->fetch_assoc();

    if (!$reset) {
        $_SESSION['message'] = "Token inválido.";
        header('Location: resetPass.php');
        exit();
    }

    // Atualiza a senha na tabela 'usuarios'
    $senhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("UPDATE usuarios SET password = ? WHERE email = ?");
    $stmt->bind_param('ss', $senhaHash, $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['message'] = "Senha alterada com sucesso.";
    } else {
        $_SESSION['message'] = "Erro ao alterar senha.";
    }

    // Após atualizar a senha, exclua o registro de reset de senha da tabela 'password_resets'
    $stmt = $conn->prepare("DELETE FROM password_resets WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();

    header('Location: resetPass.php');
    exit();
}
?>
