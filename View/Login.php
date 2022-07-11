<?php 
    session_start();


?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>
<body class="grid">
    <center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="container">
            <form method="post" action="home.php" novalidate>
                <label for="use">
                    <text class="txt">Nome de usuário</text>
                        <br>
                    <input type="text" name="userLogin" class="input">
                        <br>
                        <br>
                        <br>
                    <text class="txt">Senha</text>
                        <br>
                    <input type="password" name="passLogin" class="input">
                        <br>
                        <br>
                        <br>
                    <button type="submit" name="sub" class="btn">Entrar</button>
                        <br>
                        <br>
                    <a href="index.php" class="link">Não tem uma conta?</a>
                </label>
            </form>
        </div>
    </center>
</body>
</html>