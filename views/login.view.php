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

   #form-registro {
       display: flex;
       flex-direction: column;
       gap: 8px;
   }

   .form {
       width: 100%;
   }

   #mensagem {
       background-color: springgreen;
       color: white;

       padding: 12px;
       border-radius: 4px;
       width: 100%;
   }

</style>

<div id="wrapper">
    <div>
        <h2>Login</h2>
        <form action="">
            <input type="email" name="email" placeholder="Digite seu e-mail">
            <input type="password" name="senha" placeholder="Digite sua senha">
            <button type="submit">Logar</button>
        </form>
    </div>
    <div>
        <h2>Registro</h2>
        <form action="/registrar" id="form-registro" method="post">
            <?php if (strlen($mensagem) > 0):?>
                <div id="mensagem">
                    <?= $mensagem ?>
                </div>
            <?php endif; ?>
            <div class="form">
                <label for="name">Nome</label>
                <input type="text" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form">
                <label for="name">Email</label>
                <input type="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="form">
                <label for="email_confirmacao">Confirme seu e-mail</label>
                <input type="email" name="email_confirmacao" placeholder="Confirme o seu email" required>
            </div>
            <div class="form">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="form">Registrar</button>
        </form>
    </div>

</div>
