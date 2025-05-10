<div class="grid grid-cols-2 gap-[12px] py-[12px] px-[24px]">
    <div class="flex flex-col gap-[8px]">
        <?php foreach ($livros as $livro) {
            require 'partials/_livro.php';
        } ?>
    </div>
    <div class="border rounded-[8px] h-fit">
        <h2 class="p-[12px]">Cadastrar um novo livro</h2>
        <form action="/criar-livro" method="post" class="flex flex-col gap-[8px] p-[12px]" enctype="multipart/form-data">
            <?php if ($validacoes = flash()->get('validacoes')) : ?>
                <div>
                    <ul>
                        <li>Wooops, acho que deu ruim hein?! 😬</li>
                        <?php foreach ($validacoes as $validacao) : ?>
                            <li><?= $validacao ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
            <div>
                <input class="w-full border p-3 text-gray-700 rounded-[8px]" type="file" name="imagem">
            </div>
            <div>
                <label for="titulo">Titulo</label>
                <input class="w-full border p-3 text-gray-700 rounded-[8px]" type="text" name="titulo">
            </div>
            <div>
                <label for="autor">Autor</label>
                <input class="w-full border p-3 text-gray-700 rounded-[8px]" type="text" name="autor">
            </div>
            <div>
                <label for="descricao">Descrição</label>
                <textarea class="w-full border p-3 text-gray-700 rounded-[8px]" type="text" name="descricao"></textarea>
            </div>
            <button class="p-3 rounded-[8px] cursor-pointer bg-green-600 text-white hover:bg-green-500" type="submit">Cadastrar</button>
        </form>
    </div>

</div>