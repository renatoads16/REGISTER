<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    // Validação do e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "E-mail inválido."]);
        exit();
    }

    // Geração de token de redefinição de senha
    $token = bin2hex(random_bytes(50));

    // Salvar o token no banco de dados associado ao e-mail do usuário
    // Exemplo: $db->query("UPDATE users SET reset_token='$token' WHERE email='$email'");

    // URL para redefinir a senha
    $resetLink = "https://seusite.com/resetPassword.php?token=$token";

    // Envio do e-mail
    $to = $email;
    $subject = "Redefinição de senha";
    $message = "Clique no link a seguir para redefinir sua senha: $resetLink";
    $headers = "From: no-reply@seusite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(["status" => "success", "message" => "E-mail de redefinição enviado com sucesso."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Falha ao enviar o e-mail de redefinição."]);
    }
}
?>
