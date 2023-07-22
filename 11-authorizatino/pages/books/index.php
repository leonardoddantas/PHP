<?php 

if (!hasUser()) {
    header ('Location: /');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Livros</h1>
    <a href="/books/create">Adicionar</a>

    <ul>
    <?php foreach($books as $book) { ?>
        <li>
            <?= $book['title'] ?>
        </li>
    <?php } ?>
    </ul>
    
</body>
</html>