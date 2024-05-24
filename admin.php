<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Administrativa</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card border-transparent shadow rounded-lg p-4" style="width: auto;">
            <main class="container main-container text-center">
                <div class="container d-flex justify-content-between align-items-end  py-1 ">
                    <div>
                        <button class="btn btn-icon" id="goToLogin" onclick="goToLogin()">
                            <i class="bi bi-box-arrow-left"></i>
                        </button>
                    </div>
                    <div class="btn btn-icon" id="themeToggle" onclick="toggleTheme()">
                        <i id="themeIcon" class="bi bi-moon-stars-fill"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-center  mb-3 py-3 ">
                    <h1 class="h3 fw-bold">Área Administrativa</h1>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6 col-lg-4 py-2" id="goToLogin" onclick="goToLogin()">
                        <div class="card card-3d" style="width: 18rem;">
                            <img src="imgs/user.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Setores</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-2" id="goToLogin" onclick="goToLogin()">
                        <div class="card card-3d" style="width: 18rem;">
                            <img src="imgs/user.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Gerentes</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-2" id="goToLogin" onclick="goToLogin()">
                        <div class="card card-3d" style="width: 18rem;">
                            <img src="imgs/user.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Situações</h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 py-2" id="goToLogin" onclick="goToLogin()">
                        <div class="card card-3d" style="width: 18rem;">
                            <img src="imgs/user.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Locais</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-2" id="goToLogin" onclick="goToLogin()">
                        <div class="card card-3d" style="width: 18rem;">
                            <img src="imgs/user.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Usuários</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-2" id="goToLogin" onclick="goToLogin()">
                        <div class="card card-3d" style="width: 18rem;">
                            <img src="imgs/user.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Suporte</h5>
                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- Scripts JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>