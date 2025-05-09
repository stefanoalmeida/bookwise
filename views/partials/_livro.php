<div class="card">
    <div id="card-info">
        <div id="imagem">
            <img src="<?= $livro->imagem ?>" alt="">
        </div>
        <div>
            <a href="/livro?id=<?=$livro->id?>"><?= $livro->titulo ?></a>
            <div><?= $livro->autor ?></div>
        </div>
    </div>
    <div id="card-description">
        <p><?= $livro->descricao ?></p>
    </div>
</div>