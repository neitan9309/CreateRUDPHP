<?php
    include("database.php");

    $usuario = "Neitan";
    $senha = "93098840";
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (usuario, senha)
            VALUES ('$usuario', '$hash')";

    try{
        mysqli_query($conn, $sql);
        echo"O usuário foi registrado";
    }
    catch(mysqli_sql_exception){
        echo"O usuário não pôde registrado";
    }

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