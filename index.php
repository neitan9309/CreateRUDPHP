<?php
    //Comando que inclui o banco de dados configurado no arquivo index.
    include("database.php");

    //Variáveis, uma para armazenar o usuário inserido, outro para a senha e a $hash que conterá a senha encriptada.
    $usuario = "Neitan";
    $senha = "93098840";
    $hash = password_hash($senha, PASSWORD_DEFAULT);/*
                                                    aqui temos a função password_hash(___, PASSWORD_DEFAULT)
                                                    responsável por encriptar nossa senha (e também de
                                                    possibilitar a desencriptação).
                                                    */

    //Comando que insere as informações fornecidas nas suas respectivas colunas da tabela usuarios.
    $sql = "INSERT INTO usuarios (usuario, senha)
            VALUES ('$usuario', '$hash')";
    
    /*Comando que da o gatilho para o código SQL
    rodar no banco de dados. O try/ catch, serve
    para evitar que textos muito grandes de erro
    apareçam, caso a conexão com o banco não ocorra. */
    try{
        mysqli_query($conn, $sql);                                                  
        echo"O usuário foi registrado";                                         
    }                                                                               
    catch(mysqli_sql_exception){                                                
        echo"O usuário não pôde registrado";
    }

    //Fechar conexão.
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica</title>
</head>
<body>

</body>
</html>
