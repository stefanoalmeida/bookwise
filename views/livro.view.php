<h3>Título do Livro: <?= $livro->titulo ?></h3>
<div class="card">
    <div id="card-info">
        <div>Imagem</div>
        <div>
            <div><?= $livro->titulo ?></div>
            <div><?= $livro->autor ?></div>
            <div>⭐⭐⭐⭐⭐</div>
        </div>
    </div>
    <div id="card-description">
        <p><?= $livro->descricao ?></p>
    </div>
</div>