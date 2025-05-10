<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>BookWise</title>
</head>

<body>
    <header>
        <nav class="w-full h-[60px] py-[12px] px-[24px] bg-slate-900 text-gray-300 flex items-center justify-between">
            <div>BookWise</div>
            <ul class="flex items-center gap-[12px]">
                <li><a class="hover:text-green-500" href="/">Explorar</a></li>
                <?php if (auth()) : ?>
                    <span>|</span>
                    <li><a class="hover:text-green-500" href="/meus-livros">Meus Livros</a></li>
                <?php endif ?>
            </ul>
            <ul>
                <?php if (auth()) : ?>
                    <li><a class="hover:text-green-500" href="/logout">Oi, <?= auth()->nome ?></a></li>
                <?php else : ?>
                    <li><a class="hover:text-green-500" href="/login">Fazer Login</a></li>
                <?php endif ?>
            </ul>
        </nav>
    </header>

    <main class="h-screen overflow-auto bg-gray-200 p-4">
        <?php if ($mensagem = flash()->get('mensagem')) : ?>
            <div class="w-full p-[12px] rounded-[4px] text-white bg-green-400">
                <?= $mensagem ?>
            </div>
        <?php endif ?>
        <?php require_once "../views/{$view}.view.php"; ?>
    </main>

    </head>
</body>

</html>