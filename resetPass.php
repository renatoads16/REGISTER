<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    <title>Reset Senha</title>
</head>

<body>

    <div class="d-flex align-items-center py-4" onload="limparFormulario()">
        <div class="container ">
            <div class="container d-flex justify-content-center align-items-center vh-300">
                <div class="card border-transparent shadow rounded-lg p-2" style="width: 400px;">
                    <main class="w-100 m-auto form-container">
                        <div class="container d-flex justify-content-between align-items-end  py-1 ">
                            <div>
                                <button class="btn btn-icon" id="goToLogin" onclick="goToLogin()">
                                    <i class="bi bi-arrow-return-left"></i>
                                </button>
                            </div>
                            <div class="btn btn-icon" id="themeToggle" onclick="toggleTheme()">
                                <i id="themeIcon" class="bi bi-moon-stars-fill"></i>
                            </div>
                        </div>
                        <form action="updatePassword.php" method="post">
                            <div class="form-floating my-2">
                                <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="E-mail" required>
                                <label for="floatingEmail">E-mail:</label>
                            </div>
                            <div class="form-floating my-2">
                                <input type="text" class="form-control" id="senhaAleatoria" name="senhaAleatoria" placeholder="Senha recebida por e-mail" required>
                                <label for="senhaAleatoria">Senha recebida por e-mail:</label>
                            </div>
                            <div class="form-floating my-2">
                                <input type="password" class="form-control" id="novaSenha" name="novaSenha" placeholder="Nova Senha" required minlength="6">
                                <label for="novaSenha">Nova Senha:</label>
                            </div>
                            <div class="form-floating my-3">
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirmar Nova Senha" required minlength="6">
                                <label for="confirmPassword">Confirmar Nova Senha:</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-2" >Resetar Senha</button>
                        </form>
                    </main>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-1  ">
                <footer class="d-flex justify-content-center" id="logo">
                    <img id="logo" src="imgs/logos.png">
                </footer>
            </div>
            <div class="d-flex justify-content-center py-1 ">
                <footer class="d-flex justify-content-center py-1" id="logo">
                    <p class="mt-5 mb-3 text-body-primary">© <span id="currentYear"></span> - Rede Paraíba de Comunicação. Desenvolvido por TI.</p>
                </footer>
            </div>
        </div>
    </div>

    <!-- Scripts JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>