<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Cadastrar</title>
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
            <form method="post" action="../Controller/Insert.php" novalidate>
                <label for="use">
                    <text class="txt">Nome de usuário</text>
                        <br>
                    <input type="text" name="user" class="input">
                        <br>
                        <br>
                        <br>
                    <text class="txt">Senha</text>
                        <br>
                    <input type="password" name="pass" class="input">
                        <br>
                        <br>
                        <br>
                    <text class="txt">CPF</text>
                        <br>
                    <input type="text" name="CPF" class="input">
                        <br>
                        <br>
                        <br>
                        <br>
                    <div class="buttonContainer">
                        <button type="submit" name="sub" class="btn">Cadastrar</button>
                        <button type="reset" name="clear" class="btn">Limpar</button>
                    </div>
                        <br>
                        <br>
                    <a href="login.php" class="link">Já tem uma conta?</a>
                </label>
            </form>
        </div>
    </center>
</body>
</html>