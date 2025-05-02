<?php
require_once "./Validacao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $validacao = Validacao::validar([
        'email' => ['required', 'email'],
        'senha' => ['required']
    ], $_POST);

    if ($validacao->naoPassou('login')) {
        header('Location: /login');
        exit();
    }

    $usuario = $DB->query(
        query: "SELECT * FROM usuarios WHERE email = :email",
        class: Usuario::class,
        params: compact('email')
    )->fetch();

    if ($usuario) {
        if (!password_verify($senha, $usuario->senha)) {
            flash()->push('validacoes_login', ['Usuário ou senha estão incorretos!']);
            header('Location: /login');
            exit();
        }

        $_SESSION['auth'] = $usuario;
        flash()->push('mensagem', "Seja bem vindo {$usuario->nome}!");
        header('Location: /');
        exit();
    }
}

view("login");