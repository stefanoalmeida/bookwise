<?php

$livro = Livro::findById($_GET['id']);

view("livro", compact('livro'));

