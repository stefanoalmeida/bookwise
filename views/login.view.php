<div class="grid grid-cols-2 gap-[12px] py-[12px] px-[24px]">
    <div class="border rounded-[8px]">
        <h2 class="p-[12px]">Login</h2>
        <form action="/login" method="post" class="flex flex-col gap-[8px] p-[12px]">
        <?php if ($validacoes = flash()->get('validacoes_login')) :?>
                <div>
                    <ul class="bg-red-600 text-white p-4 rounded-[8px]">
                        <li>Wooops, acho que deu ruim hein?! 😬</li>
                        <?php foreach($validacoes as $validacao) :?>
                            <li><?= $validacao ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
            <div>
                <label for="email">E-mail</label>
                <input class="w-full border p-3 text-gray-700 rounded-[8px]" type="text" name="email" placeholder="Digite o seu email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input class="w-full border p-3 text-gray-700 rounded-[8px]" type="password" name="senha" placeholder="Digite sua senha">
            </div>
            <button class="p-3 rounded-[8px] cursor-pointer bg-green-600 text-white hover:bg-green-500" type="submit">Logar</button>
        </form>
    </div>
    <div class="border rounded-[8px]">
        <h2 class="p-[12px]">Registro</h2>
        <form action="/registrar" method="post" class="flex flex-col gap-[8px] p-[12px]">
            <?php if ($validacoes = flash()->get('validacoes_registrar')) :?>
                <div>
                    <ul class="bg-red-600 text-white p-4 rounded-[8px]">
                        <li>Wooops, acho que deu ruim hein?! 😬</li>
                        <?php foreach($validacoes as $validacao) :?>
                            <li><?= $validacao ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
            <div>
                <label for="name">Nome</label>
                <input class="w-full border p-3 text-gray-700 rounded-[8px]" type="text" name="nome" placeholder="Digite seu nome">
            </div>
            <div>
                <label for="name">Email</label>
                <input class="w-full border p-3 text-gray-700 rounded-[8px]" type="text" name="email" placeholder="Digite seu email">
            </div>
            <div>
                <label for="email_confirmacao">Confirme seu e-mail</label>
                <input class="w-full border p-3 text-gray-700 rounded-[8px]" type="text" name="email_confirmacao" placeholder="Confirme o seu email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input class="w-full border p-3 text-gray-700 rounded-[8px]" type="password" name="senha" placeholder="Digite sua senha">
            </div>
            <button class="p-3 rounded-[8px] cursor-pointer bg-green-600 text-white hover:bg-green-500" type="submit">Registrar</button>
        </form>
    </div>

</div>
