<?php 

if (!hasUser()) {
    
    header('Location: /');

} else {

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'POST' && isset($_POST['title'], $_POST['user'])) {
        
        $book = new Book(connection());
        $result = $book->save($_POST['title'], $_POST['user']);

        if ($result) {
            header ('Location: /books/index');
        }

    }    

}