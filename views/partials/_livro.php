<div class="flex flex-col border p-[12px] rounded-[8px]">
    <div class="flex gap-[16px]">
        <div class="w-[80px] rounded-[8px] overflow-hidden">
            <img class="w-full h-full object-contain" src="<?= $livro->imagem ?>" alt="">
        </div>
        <div class="flex flex-col gap-[8px]">
            <a class="hover:text-green-700" href="/livro?id=<?=$livro->id?>"><?= $livro->titulo ?></a>
            <div><?= $livro->autor ?></div>
        </div>
    </div>
    <div class="mt-[12px]">
        <p><?= $livro->descricao ?></p>
    </div>
</div>