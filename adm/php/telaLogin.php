<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanquim - Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body background="../imagens/fundo_grande.png">
    <div class="molduraLogin">

        <div class="coluna-logo">
            <img src="../imagens/logo_sanquim.webp">
        </div>
        <form action="../../php/entrar.php" method="post">
            <div class="coluna-form">
                <h1>Bem-vindo ao<br>Sanquim!</h1>
                <label for="username">E-mail:</label>
                <input type="text" id="email" placeholder="E-mail">

                <label for="password">Senha:</label>
                <input type="password" id="password" placeholder="Senha">


                <button type="submit">Entrar</button>
        </form>

        <a href="telacadastro.html">Esqueci a senha</a>
    </div>
    </div>
</body>

</html>