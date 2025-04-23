<?php

$pequisar = $_REQUEST['pesquisar'] ?? '';

$livros = $DB->query(
    query: "SELECT * FROM livros WHERE titulo LIKE :filtro",
    class: Livro::class,
    params: ['filtro' => "%$pequisar%"]
)->fetchAll();

view("index", ['livros' => $livros]);
