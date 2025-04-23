<form action="">
    <input type="text" name="pesquisar" placeholder="Pesquisar um livro...">
    <button type="submit">Pesquisar</button>
</form>

<section>
    <?php foreach ($livros as $livro) :?>
        <div class="card">
            <div id="card-info">
                <div>Imagem</div>
                <div>
                    <a href="/livro?id=<?= $livro->id ?>"><?= $livro->titulo ?></a>
                    <div><?= $livro->autor ?></div>
                    <div>⭐⭐⭐⭐⭐</div>
                </div>
            </div>
            <div id="card-description">
                <p><?= $livro->descricao ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</section>
