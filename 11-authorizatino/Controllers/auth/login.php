<?php 

// verificando se há usuário conectado
// usa função definida no arquivo auth.php
if (hasUser()) {
    header("Location: /dashboard");
}

if (isset($_POST['email'], $_POST['password'])) {
    //login

    $email = $_POST['email'];
    $password = $_POST['password'];

    //o código de busca de usuário está
    //encapsulado na classe User (modelo)
    $model = new User(connection());    
    $data = $model->find($email);   

    if ($data && password_verify($password, $data['password'])) {
        $_SESSION['user'] = $data['name'];
        $_SESSION['type'] = $data['type'];
        header('Location: /dashboard');
    } else {
        header('Location: /users/login');
    }
} else {
    header('Location: /users/login');
}