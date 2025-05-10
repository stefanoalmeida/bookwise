<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./styles.css">
    <title>BookWise</title>
</head>

<body>
    <header>
        <nav>
            <div id="logo">BookWise</div>
            <ul id="menu-livros">
                <li><a href="/">Explorar</a></li>
                <?php if (auth()) : ?>
                    <span>|</span>
                    <li><a href="/meus-livros">Meus Livros</a></li>
                <?php endif ?>
            </ul>
            <ul>
                <?php if (auth()) : ?>
                    <li><a href="/logout">Oi, <?= auth()->nome ?></a></li>
                <?php else : ?>
                    <li><a href="/login">Fazer Login</a></li>
                <?php endif ?>
            </ul>
        </nav>
    </header>

    <main>
        <?php if ($mensagem = flash()->get('mensagem')) : ?>
            <div id="mensagem">
                <?= $mensagem ?>
            </div>
        <?php endif ?>
        <?php require_once "../views/{$view}.view.php"; ?>
    </main>

    <!--<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    </head>
</body>

</html>