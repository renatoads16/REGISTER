<?php
// Inicie a sessão para mostrar mensagens de sucesso/erro
session_start();

// Inclua o arquivo de conexão com o banco de dados
require 'conect.php';

// Inclua o arquivo do PHPMailer
require_once './src/PHPMailer.php';
require './src/SMTP.php';
require './src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Função para gerar uma senha aleatória
function generatePassword($length = 8)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    return substr(str_shuffle($chars), 0, $length);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Verifique se o e-mail está registrado no banco de dados
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // Gerar uma senha aleatória
        $newPassword = generatePassword();

        // Atualizar a senha no banco de dados
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateStmt = $conn->prepare("UPDATE usuarios SET password = ? WHERE email = ?");
        $updateStmt->bind_param('ss', $hashedPassword, $email);
        $updateStmt->execute();

        // Envie a nova senha por e-mail usando PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configurações do servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'rbarros.dev@gmail.com'; // Seu endereço de e-mail do Gmail
            $mail->Password = 'rba162397'; // Sua senha do Gmail
            $mail->Port = 587; // Porta SMTP do Gmail para comunicações seguras (TLS/STARTTLS)
            $mail->SMTPSecure = 'tls'; // Tipo de criptografia - TLS

            // Remetente
            $mail->setFrom('rbarros.dev@gmail.com', 'Renato'); // Seu endereço de e-mail e nome

            // Destinatário
            $mail->addAddress($email);

            // Conteúdo do e-mail
            $mail->isHTML(true);
            $mail->Subject = 'Nova Senha';
            $mail->Body = "Sua nova senha é: <strong>$newPassword</strong>";

            // Envie o e-mail
            $mail->send();

            $_SESSION['message'] = "Uma nova senha foi enviada para o seu e-mail.";
        } catch (Exception $e) {
            $_SESSION['message'] = "Falha ao enviar a nova senha por e-mail: {$mail->ErrorInfo}";
        }
    } else {
        $_SESSION['message'] = "Nenhuma conta encontrada com este e-mail.";
    }
    header('Location: resetPass.php');
    exit();
}
