<?php
//VARIAVEIS SUPERGLOBAIS
//$_GET[]
//$_POST[]
//$_SERVER[]
//$_SESSION[]

//session_start();



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Aqui você pode adicionar a lógica de autenticação, como verificar o usuário e senha no banco de dados
    if ($email === 'admin@gmail.com' && $senha === '12345') { // Exemplo simples de autenticação
        $_SESSION['email'] = $email; // o que a minha session faz?
        echo "Login bem-sucedido! Bem-vindo, " .($email) . ".";
        
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }
} else {
    header('Location: form.html');
}

session_destroy();
