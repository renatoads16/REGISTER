<?php
include_once('conect.php');

if(isset($_POST['ok'])) {

    $email = $mysqli->escape_string($_POST['email']);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro[] = "E-mail inválido";
    }

    if(count($erro) == 0) {
        // Consulta preparada para selecionar o usuário com o e-mail fornecido
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows == 0) {
            $erro[] = "O e-mail informado não existe!";
        } else {
            // Gere uma nova senha
            $newPass = substr(md5(time()), 0, 6);
            $newPassCrip = md5(md5($newPass));

            // Atualize a senha no banco de dados
            $sql_update = "UPDATE usuarios SET password = '$newPassCrip' WHERE email = '$email'";
            $sql_query = $mysqli->query($sql_update) or die ($mysqli->error);

            // Envie a nova senha por e-mail
            if (mail($email, "Sua nova senha", "Sua nova senha: " . $newPass)) {
                echo 'Uma nova senha foi enviada para o seu e-mail.';
            } else {
                echo 'Erro ao enviar e-mail.';
            }
            echo "Nova senha: " . $newPass; // Debug - Verifique se a nova senha está sendo gerada corretamente
            echo "Email: " . $email; // Debug - Verifique se o email está correto
        }
    } else {
        foreach ($erro as $msg) {
            echo $msg . "<br>";
        }
    }
}
?>
