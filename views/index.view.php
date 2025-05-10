<form action="" class="w-[600px] py-[12px] px-[24px] flex items-center gap-[8px]">
    <input class="w-full p-[8px] rounded-[8px] text-gray-700 outline-none border" type="text" name="pesquisar" placeholder="Pesquisar um livro...">
    <button class="p-[8px] bg-green-600 rounded-[8px] text-white hover:bg-green-500 cursor-pointer" type="submit">Pesquisar</button>
</form>

<section class="py[12px] px-[24px] grid grid-cols-3 grid-rows-3 gap-[12px]">
    <?php foreach ($livros as $livro) {
        require 'partials/_livro.php';
    } ?>
</section>