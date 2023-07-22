<?php 

session_start();

include __DIR__ . '/database.php';

include __DIR__ . '/Models/User.php';
include __DIR__ . '/Models/Book.php';

include __DIR__ . '/auth.php';

include __DIR__ . '/Route.php';

//registro de rotas
include __DIR__ . '/web.php';

include __DIR__ . '/App.php';



//atenda a requisição
App::run();



