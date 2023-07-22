<?php

Route::get('/', '/pages/home.html');
Route::get('/dashboard','/pages/dashboard.php');
Route::get('/users/create','/pages/users/register.html');
Route::get('/users/login','/pages/users/login.html');
Route::post('/users/store','/Controllers/auth/register.php');
Route::get('/logout','/Controllers/auth/logout.php');
Route::post('/login','/Controllers/auth/login.php');
Route::get('/books/create', '/Controllers/books/create.php')->only('admin');
Route::post('/books/store', '/Controllers/books/store.php');
Route::get('/books/index', '/Controllers/books/index.php');

// $rotas = [
//     '/' => '/pages/home.html',
//     '/dashboard' => '/pages/dashboard.php',
//     '/users/create' => '/pages/users/register.html',
//     '/users/login' => '/pages/users/login.html',
    
//     '/users/store' => '/Controllers/auth/register.php',
//     '/logout' => '/Controllers/auth/logout.php',
//     '/login' => '/Controllers/auth/login.php', 

//     '/books/create' => '/Controllers/books/create.php',
//     '/books/store' => '/Controllers/books/store.php',
//     '/books/index' => '/Controllers/books/index.php',
// ];

/**
 * Função rotear utilizada para 
 * procurar os arquivos correpondentes da aplicação
 * referentes as rotas desejadas.
 */
// function rotear ($uri, $rotas) {   

//     if (array_key_exists($uri, $rotas)) {
//         include __DIR__ . $rotas[$uri];
//     } else {
//         header("Location: /");
//     }

// }