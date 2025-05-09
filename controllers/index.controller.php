<?php

$pequisar = $_REQUEST['pesquisar'] ?? '';

$livros = Livro::findAll($pequisar);

view("index", ['livros' => $livros]);
