<style>
   #wrapper {
       display: grid;
       grid-template-columns: 1fr 1fr;
       gap: 12px;

       padding: 12px 24px;
   }

   #wrapper > div {
       border: 1px solid #252424;
       border-radius: 8px;
   }

   #wrapper > div > h2 {
       border-bottom: 1px solid #252424;
       padding: 12px;
   }

   form{
       display: flex;
       flex-direction: column;
       gap: 8px;

       padding: 12px;
   }

   form input {
       width: 100%;
   }

   form button {
    padding: 12px;
    border-radius: 8px;
    cursor: pointer;
   }

</style>

<div id="wrapper">
    <div>
        <h2>Login</h2>
        <form action="/login" method="post">
        <?php if ($validacoes = flash()->get('validacoes_login')) :?>
                <div>
                    <ul>
                        <li>Wooops, acho que deu ruim hein?! 😬</li>
                        <?php foreach($validacoes as $validacao) :?>
                            <li><?= $validacao ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
            <div>
                <label for="email">E-mail</label>
                <input type="text" name="email" placeholder="Digite o seu email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit">Logar</button>
        </form>
    </div>
    <div>
        <h2>Registro</h2>
        <form action="/registrar" method="post">
            <?php if ($validacoes = flash()->get('validacoes_registrar')) :?>
                <div>
                    <ul>
                        <li>Wooops, acho que deu ruim hein?! 😬</li>
                        <?php foreach($validacoes as $validacao) :?>
                            <li><?= $validacao ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
            <div>
                <label for="name">Nome</label>
                <input type="text" name="nome" placeholder="Digite seu nome">
            </div>
            <div>
                <label for="name">Email</label>
                <input type="text" name="email" placeholder="Digite seu email">
            </div>
            <div>
                <label for="email_confirmacao">Confirme seu e-mail</label>
                <input type="text" name="email_confirmacao" placeholder="Confirme o seu email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit">Registrar</button>
        </form>
    </div>

</div>
