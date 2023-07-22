<?php

    // aplicação da função hasUser() definida em auth.php
    if (! hasUser()) {
        header('Location: /');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
</head>
<body>

    <h1>Book Store - <?= $_SESSION['user'] ?></h1>

    <br>
    <a href="/books/create">Criar Livros</a>
    <br>
    <a href="/users/create">Register</a>
    <br>
    <a href="/logout">Sair</a>
    
</body>
</html>