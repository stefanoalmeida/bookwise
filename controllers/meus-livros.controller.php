<?php

if (!auth()){
    header('Location: /');
    exit();
}

$livros = Livro::getMyBooks(auth()->id);

view("meus-livros", compact('livros'));