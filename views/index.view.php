<form action="" id="">
    <input type="text" name="pesquisar" placeholder="Pesquisar um livro...">
    <button type="submit">Pesquisar</button>
</form>

<section>
    <?php foreach ($livros as $livro) {
        require 'partials/_livro.php';
    } ?>
</section>