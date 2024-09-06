<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
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
            <p><a href="index.php">Voltar à página inicial</a></p>
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
