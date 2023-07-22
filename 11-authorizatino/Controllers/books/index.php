<?php

if (!hasUser()) {

    header ('Location: /');

} else {

    //onter lista de livros
    $books = Book::all();
    //incluir página
    include __DIR__ . '/../../pages/books/index.php';        

}