<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    #wrapper {
        display: grid;
        grid-template-columns: 1fr 500px;
        gap: 12px;
        padding: 12px 24px;
    }

    #div1 {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    #formWrapper  {
        border: 1px solid #252424;
        border-radius: 8px;

        width: 500px;    }

    #formWrapper > h2 {
        border-bottom: 1px solid #252424;
        padding: 12px;
    }

    #form {
        display: flex;
        flex-direction: column;
        gap: 8px;
        padding: 12px;
    }

    #form input, textarea {
        width: 100%;
    }

    #form textarea {
        border-radius: 8px;
        height: 100px;
        resize: none;

        padding: 8px;
    }

    #form button {
        padding: 12px;
        border-radius: 8px;
        cursor: pointer;
    }

</style>

<div id="wrapper">
    <div id="div1">
        <?php foreach ($livros as $livro) {
            require 'partials/_livro.php';
        } ?>
    </div>
    <div id="formWrapper">
        <h2>Cadastrar um novo livro</h2>
        <form action="/criar-livro" method="post" id="form" enctype="multipart/form-data">
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
                <input type="file" name="imagem">
            </div>
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo">
            </div>
            <div>
                <label for="autor">Autor</label>
                <input type="text" name="autor">
            </div>
            <div>
                <label for="descricao">Descrição</label>
                <textarea type="text" name="descricao"></textarea>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

</div>