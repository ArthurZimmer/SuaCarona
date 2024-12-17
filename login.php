<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon_carona/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon_carona/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon_carona/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon_carona/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon_carona/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon_carona/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon_carona/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon_carona/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_carona/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon_carona/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_carona/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon_carona/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_carona/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="icon">
                <img src="img/logo-projeto-2 (1) (1).png">
            </div>
        </div>
        <div class="right-section">
            <center><h2>Login</h2></center>
            <form action="autenticacao.php" method="post">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="input-group password-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                    <span class="toggle-password">👁️</span>
                </div>
                </a><button type="submit">Fazer Login</button>
            </form>
            <p>Não tem conta? <a href="cadastro.php">Fazer cadastro</a></p>
            <p><a href="index.html">Voltar à página inicial</a></p>
        </div>
    </div>
    <script>
        document.querySelector('.toggle-password').addEventListener('click', function () {
            const passwordField = document.querySelector('#password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
        });
    </script>
</body>
</html>
