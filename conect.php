<?php
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
