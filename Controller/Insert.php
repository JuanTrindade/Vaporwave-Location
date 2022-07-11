<?php
    session_start();
    //Variaveis para conexão com o banco
    $hostname = "127.0.0.1";
    $username = "root";
    $pass = null;
    $DB = "PhpStudy";
    $dbConnection = null;

    
    //Setando as variaveis para receber os valores do metodo post
    $db_User = $_POST['user'];
    $db_Password = $_POST['pass'];;
    $db_CPF = $_POST['CPF'];

    //Verificar se os valores recebidos pelo post estão vazios
    if($db_User == null || $db_Password == null || $db_CPF == null){
        echo "<script>alert('Failed to find values')</script>";
        header("Location: ../View/index.php");
        return null;
    }


    //Encriptando a senha (até agora ele só encripta e não decripta)
    //$criptValue = sha1($db_Password);

    //Conexão com o banco de dados
    try{
        $dbConnection = mysqli_connect($hostname, $username, $pass);
    } catch(Exception){
        echo "Failed to make connect with server";
        return null;
    }
    
    //Seleciona qual banco de dados irei usar
    mysqli_select_db($dbConnection, $DB);

    //Query que executa o insert
    $inserting = "INSERT INTO USERS (USERNAME, PASS, CPF) VALUES ('$db_User', '$db_Password', '$db_CPF')";
    //Executa a query na base de dados
    if($dados = mysqli_query($dbConnection, $inserting)){
        echo "<script>alert('Insert Succefully')</script>";
    } else{
        echo "Error to connect with server";
    }
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <Center>
        <h1>Usuarios</h1>
        <ul>
            <li>
                <p>teste 1</p>         
            </li>
        </ul>
    </Center>
</body>
</html>