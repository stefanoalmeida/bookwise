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
   }

   .form {
       width: 100%;
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
            <div class="form">
                <label for="email">E-mail</label>
                <input type="text" name="email" placeholder="Digite o seu email">
            </div>
            <div class="form">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="form">Logar</button>
        </form>
    </div>
    <div>
        <h2>Registro</h2>
        <form action="/registrar" method="post">
            <?php if ($validacoes = flash()->get('validacoes_registrar')) :?>
                <div>
                    <ul>
                        <li>PWooops, acho que deu ruim hein?! 😬</li>
                        <?php foreach($validacoes as $validacao) :?>
                            <li><?= $validacao ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
            <div class="form">
                <label for="name">Nome</label>
                <input type="text" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="form">
                <label for="name">Email</label>
                <input type="text" name="email" placeholder="Digite seu email">
            </div>
            <div class="form">
                <label for="email_confirmacao">Confirme seu e-mail</label>
                <input type="text" name="email_confirmacao" placeholder="Confirme o seu email">
            </div>
            <div class="form">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="form">Registrar</button>
        </form>
    </div>

</div>
